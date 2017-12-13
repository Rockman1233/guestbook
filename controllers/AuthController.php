<?php
/**
 * Created by PhpStorm.
 * User: sergejandrejkin
 * Date: 31.10.17
 * Time: 22:10
 */
include_once 'Controller.php';
class AuthController extends Controller {

    public function actionIndex()
    {
        $this->view->content = 'Auth.php';
        $this->view->generate();

    }

}