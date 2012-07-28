<?php
/**
 * Created by JetBrains PhpStorm.
 * Development: Max Znamensky
 * Date: 27.07.12
 * Time: 20:49
 * To change this template use File | Settings | File Templates.
 */

namespace SimpleBlog;


class Controller_Orm extends \Fuel\Core\Controller_Template {

	public $template = 'index';


	public function action_posts()
	{

		$posts = Model_Post::find('all');

		$this->template->title = 'Posts';
		$this->template->content = \Fuel\Core\View::forge('posts',array('posts'=>$posts));

	}


	public function action_post($id)
	{

		$post = Model_Post::find($id);

		$this->template->title = 'Post->'.$post->post_title;
		$this->template->content = \Fuel\Core\View::forge('post',array('post'=>$post));

	}


	public function action_user($id)
	{

		$user = Model_User::find($id);

		$this->template->title = 'Post->UserProfile'.$user->username;
		$this->template->content = \Fuel\Core\View::forge('user',array('user'=>$user));

	}

}