<?php

try{
    
    include_once("./../Classes/createInstanceFunctions.php");
    include_once("./../Controllers/mainController.php");

    class NewsletterController extends MainController {
        
        
        private $createFunction = "createNewsletter";

        function __construct() {
            parent::__construct("Newsletter", "Newsletter");
        }

        public function add($addNewsletter){

            try{
                $newsletterToAdd = createNewsletter(null, $addNewsletter->email, $addNewsletter->name);
                return $this->database->insert($newsletterToAdd);


            }catch(Exception $e) {
                throw new Exception("Incorrect information applied", 500);
            }
        }

        public function getAll() {
            return $this->database->fetchAll($this->createFunction);
        }
    
        public function getById($ID) {
            return $this->database->fetchById($ID, $this->createFunction);
            echo "getbyid";
        }
        public function getProductByCategory($categoryID) {
            return $this->database->fetchById($categoryID, $this->createFunction);
        }



    }

}catch(Exception $err) {
echo json_encode(array('Message' => $err->getMessage(), "Status" => $err->getCode()));
}


?>