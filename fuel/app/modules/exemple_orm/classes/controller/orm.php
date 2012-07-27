<?php
/**
 * Created by JetBrains PhpStorm.
 * Development: Max Znamensky
 * Date: 16.07.12
 * Time: 15:06
 * To change this template use File | Settings | File Templates.
 */

namespace Exemple_Orm;

class Controller_Orm extends \Fuel\Core\Controller_Template {

    public $template = 'index';


    public function action_read()
    {
        $obj = new Model_Actor();

        $content = $obj->find('all');
        $this->template->content = $content;
    }


    /**
     * @param $name
     */
    public function action_create($name)
    {
        $obj = new Model_Actor();
        $obj->fullname = $name;
        $obj->save();

        $content = 'Автор '.$name.' сохранен в базе!';
        $this->template->content = $content;
    }


    /**
     * @param $id
     * @param $name
     */
    public function action_update($id,$name)
    {
        $obj = Model_Actor::find($id);
        $obj->fullname = $name;
        $obj->save();

        $content = 'Автор c id - '.$id.' обновлен!';
        $this->template->content = $content;
    }


    /**
     * @param $id
     */
    public function action_delete($id)
    {
        $obj = Model_Actor::find($id);
        $obj->delete();

        $content = 'Автор c id - '.$id.' удален из базы!';
        $this->template->content = $content;
    }




}