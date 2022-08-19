<?php

    include_once("./../classes/createInstanceFunctions.php");
    include_once("./../controllers/mainController.php");
    include_once("./../controllers/categoryController.php");
    include_once("./../controllers/productController.php");


class CategorydetailsController extends MainController {

    public $createFunction = "createCategorydetails";
    function __construct() {
        parent::__construct("Categorydetails", "Categorydetails");
    }

    public function getProductByCategory() {
        return $this->database->fetchAll($this->createFunction);
    }

    public function getAll() {
        return $this->database->fetchAll($this->createFunction);
    }

    public function getById($ID) {
        return $this->database->fetchById($ID, $this->createFunction);
    }

    public function add($addnewsLetter) {
        return $this->database->fetchById($ID, $this->createFunction);
    }
    
}


?>