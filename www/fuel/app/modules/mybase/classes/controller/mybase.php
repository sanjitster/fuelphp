<?php
/**
 * Created by JetBrains PhpStorm.
 * User: by Max Znamensky
 * Date: 07.07.12
 * Time: 12:47
 * To change this template use File | Settings | File Templates.
 */

namespace Mybase;


class Controller_Mybase extends \Fuel\Core\Controller_Template {

    public $template = 'Mybase::index';

    public function getMod($path){

        $m = \Fuel\Core\Request::forge($path)->execute()->response();
        return $m;

    }

    public function getModObj($nmod,$nclass){

            \Fuel\Core\Module::load($nmod);
            $obj = $nclass::forge();
            return $obj;

    }

    public function action_index(){
        /*
        $this->template->name = 'Базовый модуль'.$this->getModObj('Module1','\\Module1\\Controller_Module1')->set('метода set объекта Controller_Module1');
        $this->template->mod1 = $this->getMod('module1/module1');
        $this->template->mod2 = $this->getMod('module2/module2');
        */
    }




}