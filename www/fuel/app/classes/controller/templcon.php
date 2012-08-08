<?php
/**
 * Created by JetBrains PhpStorm.
 * User: by Max Znamensky
 * Date: 28.06.12
 * Time: 15:03
 * To change this template use File | Settings | File Templates.
 */

class Controller_Templcon extends Controller_Template
{

        public $template = 'control/template/index';

        public function action_index() {

            $data = array();
            $data['site_title'] = 'FuelPHP';
            $data['name'] = 'Max';

            $this->template->header = View::forge('control/template/header', $data);
            $this->template->content = View::forge('control/template/content', $data);
            $this->template->footer = View::forge('control/template/footer', $data);

        }
}