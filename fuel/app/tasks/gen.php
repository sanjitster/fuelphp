<?php
/**
 * Fuel is a fast, lightweight, community driven PHP5 framework.
 *
 * @package    Fuel
 * @version    1.0
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2011 Fuel Development Team
 * @link       http://fuelphp.com
 */

/**
 * @author MaxZN
 * Задание для командной строки
 */
namespace Fuel\Tasks;


class Gen
{

    public function tplPakage($name){

        \Fuel\Core\File::copy_dir(PKGPATH.'/_blank',PKGPATH.'/'.$name);

        echo "Pakage $name by created!";
    }

}