<?php
/**
 * Created by JetBrains PhpStorm.
 * Development: Max Znamensky
 * Date: 08.08.12
 * Time: 14:58
 * To change this template use File | Settings | File Templates.
 */

namespace Blogajax;

class Controller_Auth extends \NinjAuth\Controller
{

	public function before()
	{
		parent::before();

		\NinjAuth\Controller::$linked_redirect = '/blogajax/auth/linked';
		\NinjAuth\Controller::$login_redirect = '/blogajax/blog/posts';
		\NinjAuth\Controller::$register_redirect = '/blogajax/auth/register';
		\NinjAuth\Controller::$registered_redirect = '/blogajax/blog/posts';
	}
}