<?php
/**
 * Created by JetBrains PhpStorm.
 * Development: Max Znamensky
 * Date: 26.07.12
 * Time: 13:30
 * To change this template use File | Settings | File Templates.
 */


namespace SimpleBlog;

class Model_Comment extends \Orm\Model {

	protected static $_properties = array(

		'id',
		'text',
		'post_id',

	);

	protected static $_bolongs_to = array(
		'post' => array(
			'key_from'=>'post_id',
		)
	);

}