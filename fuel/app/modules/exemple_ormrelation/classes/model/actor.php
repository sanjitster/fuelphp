<?php
/**
 * Created by JetBrains PhpStorm.
 * Development: Max Znamensky
 * Date: 16.07.12
 * Time: 15:06
 * To change this template use File | Settings | File Templates.
 */

namespace Exemple_Ormrelation;

class Model_Actor extends \Orm\Model {

    //Необходимые настройки
    protected static $_properties = array
    (
        'actor_id',
        'fullname',
        'last_update'
    );
    protected static $_table_name = 'actor';
    protected static $_primary_key = array('actor_id');
    protected static $_has_many = array('films' => array( //has many - переводится, как "имеет много"
        'model_to' => '\\Exemple_Ormrelation\\Model_Film',
        'key_from' => 'actor_id', //Primary key из текущей модели
        'key_to' => 'actor_id', //'parent_article_id' соответсвует 'article_id' из модели 'model_to'
    ));

}