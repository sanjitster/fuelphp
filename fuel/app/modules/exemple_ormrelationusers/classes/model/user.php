<?php
/**
 * Created by JetBrains PhpStorm.
 * Development: Max Znamensky
 * Date: 16.07.12
 * Time: 15:06
 * To change this template use File | Settings | File Templates.
 */

namespace Exemple_Ormrelationusers;

class Model_User extends \Orm\Model {

    //Необходимые настройки
    protected static $_properties = array
    (
        'id',
        'username',
        'password',
        'email',
        'created_at',
    );
    //protected static $_table_name  = 'users';
    //protected static $_primary_key = array('id');
	protected static $_has_many = array(
		'posts'/*=>array(
			'model_to'=>'\\Exemple_Ormrelationusers\\Model_Post',
			'key_to'  =>'author_id',
			'key_from'=>'id'
		)*/
	);
	protected static $_many_many = array(
		'groups'=>array(
			'table_through' => 'groups_users',
		)
	);

}