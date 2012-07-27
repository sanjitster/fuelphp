<?php
/**
 * Created by JetBrains PhpStorm.
 * User: by Max Znamensky
 * Date: 07.07.12
 * Time: 12:57
 * To change this template use File | Settings | File Templates.
 */

namespace Module2;


class Controller_Module2 extends \Fuel\Core\Controller_Template {

    public $template = 'Module2::index';

    public function action_index(){

        $this->template->name = 'Module2';

    }

}