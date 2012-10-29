<?php
/**
 * Created by JetBrains PhpStorm.
 * Development: Max Znamensky
 * Date: 29.10.12
 * Time: 14:15
 * To change this template use File | Settings | File Templates.
 */

namespace Fuelblog;

class Blog extends \Fuel\Core\Controller
{
    public static function hello()
    {
        return \Fuel\Core\Response::forge('Hello');
    }
}