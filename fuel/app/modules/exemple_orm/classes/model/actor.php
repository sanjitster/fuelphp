<?php
/**
 * Created by JetBrains PhpStorm.
 * Development: Max Znamensky
 * Date: 16.07.12
 * Time: 15:06
 * To change this template use File | Settings | File Templates.
 */

namespace Exemple_Orm;

class Model_Actor extends \Orm\Model {

    //Необходимые настройки
    protected static $_properties = array
    (
        'actor_id',
        'fullname',
        'last_update'
    );
    protected static $_table_name = 'actor';
    protected static $_primary_key = array('actor_id');

}