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



    static function TableName()
    {
        return 'message';
    }

    public static function getAll()
    {
        //get all messages which has a confirmed status
        $oQuery = Object::$db->query("SELECT user.login, message.text, message.status, message.id FROM message JOIN user ON message.author = user.id ");
        return $oQuery->fetchAll(PDO::FETCH_OBJ);
    }

    public static function createNew($text, $author, $browser, $ip, $status = 0){

        //push data to table
        $oQuery = Object::$db->prepare("INSERT INTO message (text, author, browser, ip, status) 
                                                  VALUES (:text, :author, :browser, :ip, :status) ");
        $oQuery->execute(['text' => $text, 'author'=> $author, 'browser'=>$browser, 'ip'=>$ip, 'status' => $status]);

    }

    public function edit() {

        $prepare = self::$db->prepare(
            'UPDATE message SET
                        text  = :text,
                        author = :author, 
                        status = :status 
                        WHERE id=:id');

        $prepare->execute(
            array(
                'text'=> $this->text,
                'author'=> $this->author,
                'status'=> $this->status,
                'id' => $this->id
            ));
    }



}