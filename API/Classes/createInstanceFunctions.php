<?php

include_once("./../classes/productClass.php");
include_once("./../classes/ordersClass.php");
include_once("./../classes/newsletterClass.php");
include_once("./../classes/categoryClass.php");
include_once("./../classes/categorydetailsClass.php");


function createProduct( $ID, $productName, $unitPrice, $unitsInStock, $image) {
    return new Product((int) $ID, $productName, $unitPrice, $unitsInStock, $image);
}


function createCategory($ID, $categoryName, $categoryImg) {
    return new Category((int)$ID, $categoryName, $categoryImg);
}


function createCategorydetails($productID, $categoryID, $categoryName, $image) {
    return new CategoryDetails((int)$productID, (int)$categoryID, $categoryName, $image);
}


function createOrders($ID, $shippingID, $customerID, $orderSum) {
    return new Orders((int)$ID, $shippingID, $customerID, $orderSum);
}


function createNewsletter($ID, $email, $name) {
    return new Newsletter((int)$ID, $email, $name);
}




?>