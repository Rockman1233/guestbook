<?php
/**
 * Created by PhpStorm.
 * User: sergejandrejkin
 * Date: 31.10.17
 * Time: 22:10
 */
include_once 'Controller.php';
class MainController extends Controller {

    public $User;

    public function actionIndex($page = 1)

    {
        foreach(Message::getAllPagination($page) as $key => $value)
        {
            $this->view->addData($key, $value);
        };
        $total = Message::Total();
        $total = $total['COUNT(*)']; //костыль
        $pagination = new Pagination("$total", "$page", Object::SHOW_DEFAULT, '');
        $pag = $pagination->get();
        $this->view->pagination = $pag;
        $this->view->content = 'Main.php';
        $this->view->generate();

    }

    public function actionSent()
    {
        If($_SESSION['captcha']['code'] == $_POST['captcha']) {
            //проверяем оставил сообщение авторизированый пользователь или нет
            $author = self::userHasID();
            //создаем нового пользователя
            If (!$author) {
                //создаем нового пользователя
                $unknown_user = $_POST['author'];
                If (!$unknown_user) {
                    $this->view->addData('system_message','<p>Введите свое имя</p>');
                    $this->view->content = 'Main.php';
                    $this->view->generate();
                };
                $unknown_email = $_POST['email'];
                If (!$unknown_email) {
                    $this->view->addData('system_message','<p>Введите свой email</p>');
                    $this->view->content = 'Main.php';
                    $this->view->generate();
                };
                $unknown_homepage = $_POST['homepage'];
                //пользователь мог не авторизоваться, но мог  ранее оставлять сообщения под данным никненймом, проверим это
                $search_of_user = User::findByName($_POST['author']);
                If (!$search_of_user) {
                    $unknown_user = User::createNew("$unknown_user", "", "$unknown_email", "$unknown_homepage");
                    $author = $unknown_user->id;
                    $this->view->addData('system_message','<p>Сообщение отправлено.Вы можете использовать этот логин для регистрации (для этого войдите под ним и создайте пароль в личном кабинете)</p>');
                    $this->view->content = 'Main.php';
                    $this->view->generate();
                } else {
                    $author = $search_of_user->id;
                    $this->view->addData('system_message','<p>Сообщение отправлено</p>');
                    $this->view->content = 'Main.php';
                    $this->view->generate();
                }
            } else {
                $this->view->addData('system_message','<p>Сообщение отправлено на модерацию</p>');
                $this->view->content = 'Main.php';
                $this->view->generate();
            }
            $this->view->addData('system_message','<p>Сообщение отправлено на модерацию</p>');
            Message::createNew($_POST['text'], $author, $_POST['browser'], $_POST['ip']);
        }else{
            $this->view->addData('system_message','<p>Капча не совпала</p>');
            $this->view->content = 'Main.php';
            $this->view->generate();

        };

    }

    public function actionLogin()
    {
        //если нажата кнопка "Войти" ищем пользователя с введенным ником в БД
        If($_POST['login'])
        {
            if (!$this->Authorization())
            {
                $this->view->addData('system_message', '<p>Авторизация не удалась (неверный логин или пароль)</p>');
            };
            //header('Location: ' . $_SERVER['HTTP_REFERER']);
        };
        $this->view->content = 'Form.php';
        $this->view->generate();

    }

    public function actionLogout() {
        unset($_SESSION['user']);
        $this->view->content = 'Form.php';
        $this->view->generate();
    }

    public function Authorization()
    {
        $current_user = User::findByName($_POST['login']);
        If(!$current_user){ return null;}
        return ($current_user->pass == $_POST['pass'])?$_SESSION['user'] = $current_user:false;
    }

    public function actionCreate()
    {
        If($_POST['login']){
            User::createNew($_POST["login"],$_POST["pass"],$_POST["email"],$_POST["homepage"]);
            $this->view->addData( "message",'<p>Вы успешно зарегистрировались</p>');
            $this->view->content = 'Form.php';
            return $this->view->generate();
        }
        $this->view->content = 'RegistrationForm.php';
        $this->view->generate();
    }

    public static function userHasID()
    {
        return (User::isLoggedUser())?$_SESSION['user']->id:false;
    }


}