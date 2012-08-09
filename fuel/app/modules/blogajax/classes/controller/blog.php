<?php
/**
 * Created by JetBrains PhpStorm.
 * Development: Max Znamensky
 * Date: 31.07.12
 * Time: 17:45
 * To change this template use File | Settings | File Templates.
 */

namespace Blogajax;

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



	public function action_oldlogin()
	{

		$view = View::forge('login');

		$val = Validation::forge();

		$val->add_field('username', 'Логин','required|min_length[2]|max_length[50]');
		$val->add_field('password', 'Пароль', 'required|min_length[2]|max_length[50]');

		$val->set_message('required','Заполните поле :label!');
		$val->set_message('min_length','Поле :label слишком короткое!');
		$val->set_message('max_length','Поле :label слишком длинное!');

		$val->add('submit', '', array('type' => 'submit', 'value' => 'Ok', 'class' => 'btn btn-primary btn-large'));


		if($val->run())
		{

			if(Input::method() == 'POST')
			{

				if(Auth::login( Input::post('username'),Input::post('password') ))
				{
					\Fuel\Core\Session::set_flash('success','You have logged in!');
					\Fuel\Core\Response::redirect('blogajax/posts');
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




	public function action_login()
	{

		$view = View::forge('login');

		$this->template->title = 'Login';
		$this->template->content = $view;

	}





	public function action_send()
	{

		$response = \Fuel\Core\Response::forge();


		if( Input::method() !== 'POST' or ! Input::is_ajax() )
		{
			$response->set_status(400);//Bad Requets
			return $response;
		}

		$val = Validation::forge();

		$val->add_field('username', 'Логин','required|min_length[2]|max_length[50]');
		$val->add_field('password', 'Пароль', 'required|min_length[2]|max_length[50]');

		$val->set_message('required','Заполните поле :label!');
		$val->set_message('min_length','Поле :label слишком короткое!');
		$val->set_message('max_length','Поле :label слишком длинное!');

		$val->add('submit', '', array('type' => 'submit', 'value' => 'Ok', 'class' => 'btn btn-primary btn-large'));


		if($val->run() and Auth::login($val->validated('username'),$val->validated('password')))
		{
			$response->body(json_encode(array(
				'status' => true,
			)));
		}
		else
		{
			$response->body(json_encode(array(
                 'status'     => false,
                 'validation' => array(
                     'username' => $val->error('username') ? $val->error('username')->get_message() : null ,
                     'password' => $val->error('password') ? $val->error('password')->get_message() : null ,
                 )
			)));
		}


		return $response;

	}


	public function action_logout()
	{

		Auth::logout();
		\Fuel\Core\Session::set_flash('success','You have logged out!');

		\Fuel\Core\Response::redirect('/blogajax/blog/posts');

	}


}