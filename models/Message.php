<?php
/**
 * Created by PhpStorm.
 * User: sergejandrejkin
 * Date: 30.10.17
 * Time: 11:57
 */
include_once 'ClassesExt.php';

class Message extends Object
{

    public $id;
    public $text;
    public $author;
    public $status;
    public $unknown_user;
    public $unknown_email;


    static function TableName()
    {
        return 'message';
    }

    public static function getAll()
    {
        //get all messages which has a confirmed status
        $oQuery = Object::$db->query("SELECT user.login, message.text, message.status FROM message JOIN user ON message.author = user.id ");
        return $oQuery->fetchAll(PDO::FETCH_OBJ);
    }

    public static function createNew($text, $author = 100, $unknown_user = 0, $unknown_email = 0, $browser, $ip, $status = 0){

        //push data to table
        $oQuery = Object::$db->prepare("INSERT INTO message (text, author, unknown_user, unknown_email, browser, ip, status) 
                                                  VALUES (:text, :author, :unknown_user, :unknown_email, :browser, :ip, :status) ");
        $oQuery->execute(['text' => $text, 'author'=> $author, 'unknown_user'=> $unknown_user, 'unknown_email'=> $unknown_email, 'browser'=>$browser, 'ip'=>$ip, 'status' => $status]);

    }


}