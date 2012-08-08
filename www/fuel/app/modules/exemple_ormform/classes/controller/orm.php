<?php
/**
 * Created by JetBrains PhpStorm.
 * Development: Max Znamensky
 * Date: 16.07.12
 * Time: 15:06
 * To change this template use File | Settings | File Templates.
 */

namespace Exemple_Ormform;

use Fuel\Core\Fieldset;
use Fuel\Core\Response;
use Fuel\Core\View;

class Controller_Orm extends \Fuel\Core\Controller_Template {

    public $template = 'index';

    //list posts
    function action_list()
    {
        $posts = Model_Post::find('all');

        $view  = View::forge('listing');
        $view->set('posts', $posts, false);

        $this->template->content = $view;
    }

    //add new one
    function action_add()
    {
        $post = Model_Post::forge();
        $fieldset = Fieldset::forge('post', array(
                'form_attributes' => array(
                    'class' => 'form-horizontal well'
                )
            )
        )->add_model($post)->repopulate();

        $form = $fieldset->form();
        $form->add('submit', '', array('type' => 'submit', 'value' => 'Add', 'class' => 'btn btn-primary btn-large'));


        if($fieldset->validation()->run() == true)
        {
            $fields = $fieldset->validated();
            $post->post_title     = $fields['post_title'];
            $post->post_content   = $fields['post_content'];
            $post->author_name    = $fields['author_name'];
            $post->author_email   = $fields['author_email'];
            $post->author_website = $fields['author_website'];
            $post->post_status    = $fields['post_status'];

            if($post->save())
            {
                Response::redirect('exemple_ormform/orm/edit/'.$post->id);
            }
        }
        else
        {
            $this->template->set('messages', $fieldset->show_errors(), false);
        }


        $this->template->set('content', $form->build(), false); //false will tell fuel not to convert the html tags to safe string.
    }

    //edit
    function action_edit($id)
    {
        $post = Model_Post::find($id);

        $fieldset = Fieldset::forge('post', array(
                'form_attributes' => array(
                    'class' => 'form-horizontal well'
                )
            )
        )->add_model($post)->populate($post); //model post object is passed to the populate method
        $form     = $fieldset->form();
        $form->add('submit', '', array('type' => 'submit', 'value' => 'Add', 'class' => 'btn btn-primary btn-large'));

        if($fieldset->validation()->run() == true)
        {
            $fields = $fieldset->validated();

            //$post = new Model_Post;
            $post->post_title     = $fields['post_title'];
            $post->post_content   = $fields['post_content'];
            $post->author_name    = $fields['author_name'];
            $post->author_email   = $fields['author_email'];
            $post->author_website = $fields['author_website'];
            $post->post_status    = $fields['post_status'];

            if($post->save())
            {
                Response::redirect('exemple_ormform/orm/edit/'.$id);
            }
        }
        else
        {
            $this->template->set('messages', $fieldset->show_errors(), false);
        }

        $this->template->set('content', $form->build(), false);
    }


}