<?php
/**
 * Created by JetBrains PhpStorm.
 * Date: 25.06.12
 * Time: 20:23
 * To change this template use File | Settings | File Templates.
 */

class Controller_Basecon extends Controller {

    public function action_index(){

        $d['name'] = 'Вася';
        $d['hello'] = 'привет!';

        return View::forge('control/layers/header',$d);

    }

    public function action_main($name = null,$hello = null){

        $d['name'] = $name;
        $d['hello'] = $hello;

        $this->response->body = View::forge('control/layers/header',$d);

    }

}