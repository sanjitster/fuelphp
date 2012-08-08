<?php
/**
 * Created by JetBrains PhpStorm.
 * Development: Max Znamensky
 * Date: 16.07.12
 * Time: 15:06
 * To change this template use File | Settings | File Templates.
 */

namespace Exemple_Ormrelationusers;

use Fuel\Core\View;

class Controller_Orm extends \Fuel\Core\Controller_Template {


	public $template = 'index';



    public function action_posts()
    {
        //$posts = Model_Post::find()->related('user')->get();
        $posts = Model_Post::find('all', array('related' => array('user')));
	    $this->template->title = 'Posts';
        $this->template->content = View::forge('posts',array('posts'=>$posts),false);
    }



	public function action_post($id)
	{
		$post = Model_Post::find($id);
		$this->template->title = 'Post->'.$post->post_title;
		$this->template->content = View::forge('post',array('post'=>$post),false);
	}



	public function action_user($id)
	{
		$user = Model_User::find($id);
		$this->template->title = 'UserProfile - '.$user->username;
		$this->template->content = View::forge('user',array('user'=>$user),false);
	}
}