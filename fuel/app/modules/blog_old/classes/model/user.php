<?php
/**
 * Created by JetBrains PhpStorm.
 * Development: Max Znamensky
 * Date: 26.07.12
 * Time: 13:30
 * To change this template use File | Settings | File Templates.
 */


namespace Blog;

class Model_User extends \Orm\Model {

	protected static $_properties = array(

		'id',
		'username',
		'password',
		'email',
		'created_at',

	);

	protected static $_has_many = array(
		'posts' => array(
			'key_to'=>'author_id',
		)
	);

	protected static $_many_many = array(
		'groups' => array(
			'table_through' => 'groups_users',
		)
	);

}