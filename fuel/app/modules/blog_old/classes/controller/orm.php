<?php
/**
 * Created by JetBrains PhpStorm.
 * Development: Max Znamensky
 * Date: 26.07.12
 * Time: 13:24
 * To change this template use File | Settings | File Templates.
 */
namespace Blog;

use Fuel\Core\View;

class Controller_Orm extends \Fuel\Core\Controller_Template {

	public $template = 'index';

	public function action_posts()
	{

		$posts = Model_Post::find('all');

		$this->template->title = 'Posts';
		$this->template->content = View::forge('posts',array('posts'=>$posts));

	}

	public function action_post($id)
	{

		$post = Model_Post::find($id);

		$this->template->title = 'Post->'.$post->post_title;
		$this->template->content = View::forge('post',array('post'=>$post));

	}

	public function action_user($id)
	{

		$user = Model_User::find($id);

		$this->template->title = 'UserProfile->'.$user->username;
		$this->template->content = View::forge('user',array('user'=>$user));

	}


}