<?php
/**
 * Created by JetBrains PhpStorm.
 * User: by Max Znamensky
 * Date: 07.07.12
 * Time: 12:57
 * To change this template use File | Settings | File Templates.
 */

namespace Module3;


class Controller_Module3 extends \Fuel\Core\Controller {

    public function set($data){
        return $data;
    }

    public static function forge(){
        return new static;
    }

}