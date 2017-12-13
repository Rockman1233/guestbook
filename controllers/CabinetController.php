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
        $_SESSION['user']->email = $new_email;
        $_SESSION['user']->homepage = $new_homepage;
        $_SESSION['user']->edit();

        $this->view->content = 'Cabinet.php';
        $this->view->generate();

    }


}