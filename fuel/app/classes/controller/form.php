<?php
/**
 * Created by JetBrains PhpStorm.
 * User: by Max Znamensky
 * Date: 26.06.12
 * Time: 15:23
 * To change this template use File | Settings | File Templates.
 */

class Controller_Form extends Controller_Template{

	public $template = 'form';

	public function action_send()
	{
		$post = \Fuel\Core\Input::all();
		$this->template->post = $post;
	}

}