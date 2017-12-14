<?php
/**
 * Created by PhpStorm.
 * User: sergejandrejkin
 * Date: 31.10.17
 * Time: 22:10
 */
include_once 'Controller.php';
class CabinetController extends Controller {


    public function actionIndex()

    {
        $this->view->content = 'Cabinet.php';
        $this->view->generate();
    }

    public function actionEdit()
    {
        //пишем валидацию
        $new_email = $_POST['email'];
        $new_homepage = $_POST['homepage'];
        $new_pass = $_POST['pass'];
        $_SESSION['user']->pass = $new_pass;
        $_SESSION['user']->email = $new_email;
        $_SESSION['user']->homepage = $new_homepage;
        $_SESSION['user']->edit();
        $this->view->content = 'Cabinet.php';
        $this->view->generate();

    }

    public function actionAdmin()
    {
        foreach(Message::getAllwithoutPagination() as $key => $value)
        {
            $this->view->addData($key, $value);
        };
        $this->view->content = 'Admin.php';
        $this->view->generate();
    }

    public function actionUsers()
    {
        foreach(User::getAll() as $key => $value)
        {
            $this->view->addData($key, $value);
        };
        $this->view->content = 'Users.php';
        $this->view->generate();
    }

    public function actionEditmessage()
    {
        $message = Message::findById($_POST['message_id']);
        if($_POST['delete'])
        {
            var_dump(Message::delete($message->id));
        }
        If($this->messageIsChanged())
        {
            ($_POST['message_text'])?$message->text = $_POST['message_text']:null;
            (isset($_POST['message_status']))?$message->status = $_POST['message_status']:null;
            $message->edit();
        }

        $this->view->addData('author', $_SESSION['user']->id);
        $this->view->addData('message', $message);
        $this->view->content = 'Edit_message.php';
        $this->view->generate();

    }

    public function actionEdituser()
    {
        $user = User::findById($_POST['user_id']);
        if($_POST['delete'])
        {
            User::delete($user->id);

        }
        If($this->userIsChanged())
        {
            ($_POST['email'])?$user->email = $_POST['email']:null;
            ($_POST['homepage'])?$user->homepage = $_POST['homepage']:null;
            (isset($_POST['is_admin']))?$user->is_admin = $_POST['is_admin']:null;
            $user->edit();
        }

        $this->view->addData('author', $_SESSION['user']->id);
        $this->view->addData('user', $user);
        $this->view->content = 'Edit_user.php';
        $this->view->generate();

    }


    public function messageIsChanged(){
        return ($_POST['message_status']|$_POST['message_text'])?True:false;
    }

    public function userIsChanged(){
        return ($_POST['email']|$_POST['homepage']|$_POST['is_admin'])?True:false;
    }



}