<?php
/**
 * Created by JetBrains PhpStorm.
 * Development: Max Znamensky
 * Date: 16.07.12
 * Time: 15:06
 * To change this template use File | Settings | File Templates.
 */

namespace Exemple_Ormrelationusers;

class Model_Comment extends \Orm\Model {

    //Необходимые настройки
    protected static $_properties = array
    (
        'id',
        'text',
        'post_id',
    );
    //protected static $_table_name  = 'comments';
    //protected static $_primary_key = array('id');
	protected static $_belongs_to  = array(
		'post'/*=>array(
			'key_from'=>'post_id',
			'key_to'  =>'id'
		)*/
	);

}