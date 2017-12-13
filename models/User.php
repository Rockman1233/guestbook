<?php
/**
 * Created by PhpStorm.
 * User: sergejandrejkin
 * Date: 30.10.17
 * Time: 11:57
 */
include_once 'ClassesExt.php';

class User extends Object
{
    public $id;
    public $login;
    public $pass;
    public $is_admin;
    public $email;
    public $homepage;
    public $browser;
    public $ip;



    static function TableName()
    {
        return 'user';
    }

    public function edit() {

        $prepare = self::$db->prepare(
            'UPDATE user SET
                        email  = :email,
                        homepage = :homepage 
                        WHERE id=:id');

        $prepare->execute(
            array(
                'email'=> $this->email,
                'homepage'=> $this->homepage,
                'id' => $this->id
            ));
    }
    public static function createNew($login, $pass, $is_admin, $email, $homepage){

        //push data to table
        $oQuery = Object::$db->prepare("INSERT INTO user (login, pass, is_admin, email, homepage) 
                                                  VALUES (:login, :pass, :is_admin, :email, :homepage) ");
        $oQuery->execute(['login' => $login, 'pass'=> $pass, 'is_admin'=>$is_admin, 'email'=>$email, 'homepage' => $homepage]);
        return User::findByName($login);

    }

    public static function findByName($name)
    {
        /** @var Object $class */
        $oQuery = self::$db->prepare("SELECT * FROM user WHERE login=:need_name");
        $oQuery->execute(['need_name' => $name]);
        $aRes = $oQuery->fetch(PDO::FETCH_OBJ);
        return $aRes? new User($aRes): null;
    }

    public static function isLoggedUser()
    {
        return (isset($_SESSION['user']))? true: false;
    }





}