<?php
/**
 * Created by JetBrains PhpStorm.
 * Development: Max Znamensky
 * Date: 16.07.12
 * Time: 15:06
 * To change this template use File | Settings | File Templates.
 */

namespace Exemple_Ormrelation;

class Model_Film extends \Orm\Model {

    //Необходимые настройки
    protected static $_properties = array
    (
        'film_id',
        'title',
        'description',
        'release_year',
        'rental_duration',
        'length',
        'replacement_cost',
        'rating',
        'rating',
        'special_features',
        'last_update',
        'actor_id'
    );
    protected static $_table_name = 'film';
    protected static $_primary_key = array('film_id');

}