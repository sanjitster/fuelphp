<?php
/**
 * Created by JetBrains PhpStorm.
 * Development: Max Znamensky
 * Date: 01.08.12
 * Time: 14:54
 * To change this template use File | Settings | File Templates.
 */


namespace Blog;


class Model_Post extends \Orm\Model
{

	protected static $_properties = array(

		'id',
		'title',
		'content',
		'created_at',
		'author_id',

	);


	protected static $_belongs_to = array(
		'user'=>array(
			'key_from'=>'author_id'
		)
	);



}