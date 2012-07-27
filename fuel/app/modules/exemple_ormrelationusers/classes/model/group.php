<?php
/**
 * Created by JetBrains PhpStorm.
 * Development: Max Znamensky
 * Date: 16.07.12
 * Time: 15:06
 * To change this template use File | Settings | File Templates.
 */

namespace Exemple_Ormrelationusers;

class Model_Group extends \Orm\Model {

    //Необходимые настройки
    protected static $_properties = array
    (
        'id',
        'group',
    );
	protected static $_many_many = array(
		'users'=>array(
			'table_through' => 'groups_users',
		)
	);

}