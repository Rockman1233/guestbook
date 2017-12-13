<?php
/**
 * Created by PhpStorm.
 * User: sergejandrejkin
 * Date: 01.11.17
 * Time: 9:49
 */
include_once($_SERVER['DOCUMENT_ROOT'].'/views/view.php');

class Controller {
    public $view;

    function __construct($template='template.php')

    {
        $this->view = new View($template);
    }

    public function actionIndex() {

    }



}