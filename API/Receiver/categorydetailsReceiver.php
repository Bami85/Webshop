<?php

try{

    include_once("./../Controllers/categorydetailsController.php");

    if($_SERVER["REQUEST_METHOD"] == "GET") {

        if($_GET["action"] == "getProductByCategory")

        $controller = new CategorydetailsController();
        echo(json_encode($controller->getProductByCategory()));
        exit;

        }else if($_GET["action"] == "getById") {

            $controller = new CategorydetailsController();
            echo(json_encode($controller->getCategoryProductID((int)$_GET["ID"])));

            if(!isset($_GET["ID"])) {
                throw new Exception("Missing ID", 501);
                exit;
            }
            
        }else if($_GET["action"] == "getAll") {

            $controller = new CategorydetailsController();
            echo(json_encode($controller->getAll()));
            exit;
    }


}catch(Exception $e) {
    echo json_encode(array("Message" => $e->getMessage(), "Status" => $e->getCode()));
}

?>

if($_GET["action"] == "getProductByCategory")

        $controller = new ProductController();
        echo(json_encode($controller->getAll()));
        exit;