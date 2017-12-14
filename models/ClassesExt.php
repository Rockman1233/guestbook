<?php

include $_SERVER['DOCUMENT_ROOT'].'/config/DBConnect.php';

abstract class Object{

    /** @var  PDO */
    static $db;
    const SHOW_DEFAULT = 3; //pagination - How many goods do you want to see on page?

    public function __construct($params = [])
    {
        $className = get_called_class();
        foreach ($params as $param_name => $param_value){
            if (property_exists($className, $param_name ))
                $this->$param_name = $param_value;
        }
    }

    public function __get($name)
    {
        if (property_exists($this,$name))
            return $this->name;

        return 'Not exist';
    }

    public function __set($name, $value)
    {
        if (property_exists($this,$name))
            $this->$name = $value;
        return 'Not exist';
    }

    abstract static function TableName();

    /**
     * @param integer $id
     * @return
     */
    public static function findById($id){

        /** @var Object $class */
        $class = get_called_class();
        $table = $class::TableName();

        $oQuery = self::$db->prepare("SELECT * FROM {$table} WHERE id=:need_id");
        $oQuery->execute(['need_id' => $id]);
        $aRes = $oQuery->fetch(PDO::FETCH_ASSOC);
        return $aRes? new $class($aRes):null;
    }

    public static function getAll()
    {
        $class = get_called_class();
        $table = $class::TableName();
        $oQuery = self::$db->query("SELECT * FROM {$table}");
        return $oQuery->fetchAll(PDO::FETCH_OBJ);
    }

    public static function delete($id) {
        $class = get_called_class();
        $table = $class::TableName();
        return self::$db->query("DELETE FROM {$table} WHERE id=$id");
    }



}



