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

    public static function getAllPagination($page)
    {
        $page = intval($page);
        $count = Object::SHOW_DEFAULT;
        $offset = $count * ($page - 1);
        //get all messages which has a confirmed status
        $oQuery = Object::$db->query("SELECT user.login, message.text, message.status, message.id 
                                                FROM message JOIN user ON message.author = user.id WHERE message.status = True LIMIT $count OFFSET $offset");

        return $oQuery->fetchAll(PDO::FETCH_OBJ);
    }

    public static function getAllwithoutPagination()
    {
        //get all messages which has a confirmed status
        $oQuery = Object::$db->query("SELECT user.login, message.text, message.status, message.id 
                                                FROM message JOIN user ON message.author = user.id ");

        return $oQuery->fetchAll(PDO::FETCH_OBJ);
    }

    public static function createNew($text, $author, $browser, $ip, $status = 0){

        //push data to table
        $oQuery = Object::$db->prepare("INSERT INTO message (text, author, browser, ip, status) 
                                                  VALUES (:text, :author, :browser, :ip, :status) ");
        $oQuery->execute(['text' => $text, 'author'=> $author, 'browser'=>$browser, 'ip'=>$ip, 'status' => $status]);

    }

    public static function Total()
    {
        $oQuery = Object::$db->query("SELECT COUNT(*) FROM message WHERE status>0");
        return $oQuery->fetch(PDO::FETCH_ASSOC);
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