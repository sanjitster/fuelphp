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
use Fuel\Core\Validation;

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
		$view = View::forge('login');

		$val = Validation::forge();

		$val->add_field('username', 'Логин','required|min_length[2]|max_length[16]');
		$val->add_field('password', 'Пароль','required|min_length[2]|max_length[16]');

		/*$val->set_message('required','Заполните поле :label!');
		$val->set_message('min_length','Поле :label слишком короткое!');
		$val->set_message('max_length','Поле :label слишком длинное!');

		$val->add('submit', '', array('type' => 'submit', 'value' => 'Ok', 'class' => 'btn btn-primary btn-large'));*/


		if($val->run())
		{

			if(Input::method() == 'POST')
			{

				if(Auth::login( Input::post('username'),Input::post('password') ))
				{
					\Fuel\Core\Session::set_flash('success','You have logged in!');
					\Fuel\Core\Response::redirect('blog/posts');
				}
				else
				{
					\Fuel\Core\Session::set_flash('fail','Неверная пара логин-пароль!');
				}

			}

		}

		$view->val = $val;

		$this->template->title = 'Login';
		$this->template->content = $view;

	}



	public function action_logout()
	{

		Auth::logout();
		\Fuel\Core\Session::set_flash('success','You have logged out!');

		\Fuel\Core\Response::redirect('blog/posts');

	}


}