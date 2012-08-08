<?php
/**
 * Created by JetBrains PhpStorm.
 * Development: Max Znamensky
 * Date: 01.08.12
 * Time: 14:54
 * To change this template use File | Settings | File Templates.
 */


namespace Blog;


class Model_User extends \Orm\Model
{

	protected static $_properties = array(

		'id',
		'username',
		'password',
		'group',
		'email',
		'last_login',
		'login_hash',
		'profile_fields',
		'created_at',

	);

	protected static $_has_many = array(
		'posts'=>array(
			'key_to' => 'author_id',
		)
	);


}