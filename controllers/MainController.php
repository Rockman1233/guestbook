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
        foreach(Message::getAll() as $key => $value)
        {
            $this->view->addData($key, $value);
        };
        $this->view->content = 'Main.php';
        $this->view->generate();

    }

    public function actionSent()
    {
        //проверяем оставил сообщение авторизированый пользователь или нет
        $author = self::userHasLogged();
        $unknown_user = self::getUnknownUser();
        $unknown_email = self::getUnknownEmail();

        Message::createNew($_POST['text'], $author, $unknown_user , $unknown_email,
                           $_POST['browser'], $_POST['ip']);
        //header('Location: ' . $_SERVER['HTTP_REFERER']);

    }

    public function actionLogin()
    {
        //если нажата кнопка "Войти" ищем пользователя с введенным ником в БД
        If($_POST['login'])
        {
            var_dump($this->Authorization());
            header('Location: ' . $_SERVER['DOCUMENT_ROOT']);
        }
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
        return ($current_user->pass == $_POST['pass'])?$_SESSION['user'] = $current_user:false;
    }

    public static function userHasLogged()
    {
        return (User::isLoggedUser())?$_SESSION['user']['id']:100;
    }

    public static function  getUnknownUser()
    {
        return (User::isLoggedUser())?null:$_POST['author'];
    }

    public static function getUnknownEmail()
    {
        return (User::isLoggedUser())?null:$_POST['email'];
    }





}