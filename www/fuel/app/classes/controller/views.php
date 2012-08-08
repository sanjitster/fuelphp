<?

class Controller_Views extends Controller
{

    public function action_index() {

        $d = array(); //хранит переменные, передаваемые представлениям

        $d['username'] = 'Joe14';
        $d['title'] = 'Home';

        //назначает представление выводу браузера
        return View::forge('views/vars/index', $d);

    }

    public function action_methodone() {

        //создает представление
        $view = View::forge('views/vars/methodone');

        //присваивает переменные представлению
        $view->username = 'Вася';
        $view->title = 'methodone';

        //назначает представление выводу браузера
        return $view;

}

public function action_methodtwo() {

    //создает представление
    $view = View::forge('views/vars/methodtwo');

    //присваивает переменные представлению
    $view->set('username','Вася');
    $view->set('title','methodone');

    //назначает представление выводу браузера
    return $view;

}

public function action_otlogennoe()
    {
        // создает представление
        $view = View::forge('views/layers/otlogennoe/index');

        // присваивает глобальные переменные, чтобы все представления имели доступ к ним
        $view->set_global('username', 'Joe14');
        $view->set_global('title', 'Home');
        $view->set_global('site_title', 'My Website');

        //присваивает представления в качестве переменных, отложенное формирование
        $view->head = View::forge('views/layers/otlogennoe/head');
        $view->header = View::forge('views/layers/otlogennoe/header');
        $view->content = View::forge('views/layers/otlogennoe/content');
        $view->footer = View::forge('views/layers/otlogennoe/footer');

        // возвращает объект представления запросу
        return $view;
    }

    public function action_vlogennoe()
    {
        //присваивает переменные
        $data = array();
        $data['title'] = 'Home';
        $data['site_title'] = 'My Website';
        $data['username'] = 'Вася';

        $data['zagolovok'] = View::forge('views/layers/vlogennoe/header_zagolovok');

        //присваивает представления в качестве переменных, принудительное формирование
        $views = array();
        $views['head'] = View::forge('views/layers/vlogennoe/head', $data);
        $views['header'] = View::forge('views/layers/vlogennoe/header', $data);
        $views['content'] = View::forge('views/layers/vlogennoe/content', $data);
        $views['footer'] = View::forge('views/layers/vlogennoe/footer', $data);

        // возвращает сформированный HTML запросу
        return View::forge('views/layers/vlogennoe/index', $views);
    }

}