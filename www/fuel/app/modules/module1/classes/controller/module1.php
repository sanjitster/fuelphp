<?php
/**
 * Created by JetBrains PhpStorm.
 * User: by Max Znamensky
 * Date: 07.07.12
 * Time: 12:57
 * To change this template use File | Settings | File Templates.
 */

namespace Module1;


class Controller_Module1 extends \Fuel\Core\Controller_Template {

    public $template = 'Module1::index';

    public function action_index(){

        $this->template->name = 'Module1';

    }

    public function set($d){
        return 'Результат: '.$d;
    }

    public static function forge(){
        return new static;
    }

}