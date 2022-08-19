<?php

    
    try{

        include_once("./../Controllers/newsletterController.php");
        
        if($_SERVER["REQUEST_METHOD"] == "GET") {

            if($_GET["action"] == "getAll") {
    
                $controller = new NewsletterController();
                echo(json_encode($controller->getAll()));
                exit;
            }
            
        }else if($_SERVER["REQUEST_METHOD"] == "POST") {
        
            if($_POST["action"] == "add") {
                
                $controller = new NewsletterController();
                
                if(!isset($_POST["addNewsletter"])) {
                    throw new Exception("Missing ID", 501);
                    exit;
                }
                
                echo(json_encode($controller->add(json_decode($_POST["addNewsletter"]))));
                exit;
            }
        }
        
    }catch(Exception $e) {
        echo json_encode(array("Message" => $e->getMessage(), "Status" => $e->getCode()));
    }
?>