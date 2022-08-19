<?php

try{
    include_once("./../classes/databaseClass.php");

    abstract class MainController {

        public $database;

     function __construct($table, $class) {
            $this->database = new Database($table, $class);
        }

        abstract function getAll();
        abstract function getProductByCategory();
        abstract function getById($ID);
        abstract function add($addNewsletter);

    }

}catch(Exception $err) {
    echo json_encode(array('Message' => $err->getMessage(), "Status" => $err->getCode()));
}
?>