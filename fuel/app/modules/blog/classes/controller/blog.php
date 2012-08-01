<?php
/**
 * Created by JetBrains PhpStorm.
 * Development: Max Znamensky
 * Date: 31.07.12
 * Time: 17:45
 * To change this template use File | Settings | File Templates.
 */

namespace Blog;

use Fuel\Core\View;
use Fuel\Core\Input;
use Auth\Auth;

class Controller_Blog extends Controller_Base
{

	public $template = 'index';


	public function action_posts()
	{

		$posts = Model_Post::find('all');

		$this->template->title = 'Лента';
		$this->template->content = View::forge('posts',array('posts'=>$posts));

	}



	public function action_post($id)
	{

		$post = Model_Post::find($id);

		$this->template->title = $post->title;
		$this->template->content = View::forge('post',array('post'=>$post));

	}



	public function action_login()
	{

		if(Input::method() == 'POST')
		{
			if(Auth::login(Input::post('username'),Input::post('password')))
			{
				\Fuel\Core\Session::set_flash('success','You have logged in!');
				\Fuel\Core\Response::redirect('blog/posts');
			}
			else
			{
				exit('Invalid Login');
			}
		}

		$this->template->title = 'Login';
		$this->template->content = View::forge('login');

	}



	public function action_logout()
	{

		Auth::logout();
		\Fuel\Core\Session::set_flash('success','You have logged out!');

		\Fuel\Core\Response::redirect('blog/posts');

	}


}