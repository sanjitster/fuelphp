<?php
/**
 * Created by JetBrains PhpStorm.
 * Date: 25.06.12
 * Time: 20:23
 * To change this template use File | Settings | File Templates.
 */

class Controller_Restcon extends Controller_Rest {

    public function get_list()
    {
        $this->response(array(
                        'name' => Input::get('name'),
                        'integer' => array(
                            1, 50, 219
                        ),
                        'empty' => null
        ));
    }

}