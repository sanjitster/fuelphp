<?php
/**
 * Created by JetBrains PhpStorm.
 * Development: Max Znamensky
 * Date: 16.07.12
 * Time: 15:06
 * To change this template use File | Settings | File Templates.
 */

namespace Exemple_Ormrelationusers;

class Model_Post extends \Orm\Model {

    //Необходимые настройки
    protected static $_properties = array
    (
        'id',
        'post_title',
        'post_content',
        'author_id',
    );
    //protected static $_table_name  = 'posts';
    //protected static $_primary_key = array('id');
    protected static $_has_many = array(
	    'comments'/*=>array(
		    'key_from'=>'id',
		    'key_to'=>'post_id'
	    )*/
    );
	protected static $_belongs_to  = array(
		'user'=>array(
			'key_from'=>'author_id'
		)
	);

}