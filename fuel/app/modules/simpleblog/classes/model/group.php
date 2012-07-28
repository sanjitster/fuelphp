<?php
/**
 * Created by JetBrains PhpStorm.
 * Development: Max Znamensky
 * Date: 26.07.12
 * Time: 13:30
 * To change this template use File | Settings | File Templates.
 */


namespace Blog;

class Model_Group extends \Orm\Model {

	protected static $_properties = array(

		'id',
		'group',

	);

	protected static $_many_many = array(
		'users' => array(
			'table_through' => 'groups_users',
		)
	);



}