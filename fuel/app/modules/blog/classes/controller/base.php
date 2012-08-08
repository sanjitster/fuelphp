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
use \Auth\Auth;

class Controller_Base extends \Fuel\Core\Controller_Template
{


	public function before()
	{

		parent::before();

		if(Auth::check())
		{
			list($driver,$user_id) = Auth::get_user_id();

			$this->current_user = Model_User::find($user_id);
		}
		else
		{
			$this->current_user = null;
		}

		View::set_global('current_user',$this->current_user);

	}



}