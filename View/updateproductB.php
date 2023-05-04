<?php
include '../Controller/productC.php';
$productC = new productC();




$error = "";



// create client


// create an instance of the controller 


     
        $productC->updateproductB( $_POST['idpro']);
            
       
    
      //  C:\xampp\htdocs\5edma\back\pages\tables.php
        
        header('Location:../5edma/pages/event-listing1.php');
   


?>