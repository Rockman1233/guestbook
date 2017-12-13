<?php
/**
 * Created by PhpStorm.
 * User: sergejandrejkin
 * Date: 01.11.17
 * Time: 9:38
 */
class View
{

    private $aData = [];
    public $pagination;
    public $content;
    public $template;

    public function __construct($template)
    {
        $this->template = $template;
    }

    function addData($sName, $Value)
    {
        $this->aData[$sName] = $Value;

    }

    function generate()
    {
        include_once $this->template;
        include_once $this->content;
    }


}