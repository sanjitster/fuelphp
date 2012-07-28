<?php
/**
 * Created by JetBrains PhpStorm.
 * Development: Max Znamensky
 * Date: 27.07.12
 * Time: 20:54
 * To change this template use File | Settings | File Templates.
 */


namespace SimpleBlog;

class Model_Post extends \Orm\Model{

	protected static $_properties = array(

		'id',
		'post_title',
		'post_content',
		'post_content',
		'author_id',

	);

	protected static $_belongs_to = array(
		'user'=>array(
			'key_from'=>'author_id'
		)
	);

	protected static $_has_many = array('comments');

}