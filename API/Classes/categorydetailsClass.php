<?php

Class Categorydetails {

    public $productID;
    public $categoryID;
    public $categoryName;
    public $image;


    function __construct($productID, $categoryID, $categoryName, $image) {

        $this->productID = $productID;
        $this->categoryID = $categoryID;
        $this->categoryName = $categoryName;
        $this->image = $image;
    }
}

?>