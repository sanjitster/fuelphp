<?php
/**
 * Created by JetBrains PhpStorm.
 * Development: Max Znamensky
 * Date: 16.07.12
 * Time: 15:06
 * To change this template use File | Settings | File Templates.
 */

namespace Exemple_Ormrelation;

class Controller_Orm extends \Fuel\Core\Controller_Template {


	public $template = 'index';


    public function action_read($id)
    {
        $actor = Model_Actor::find('all', array('related' => array('user')));
        $this->template->actor = $actor;
    }
}