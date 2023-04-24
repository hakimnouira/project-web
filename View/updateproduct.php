<?php
include '../Controller/productC.php';
$productC = new productC();




$error = "";



// create client


// create an instance of the controller 


if (
    isset($_POST["product_name"]) &&
    isset($_POST["product_des"]) &&
    isset($_POST["product_price"]) &&
    isset($_POST["product_img"])&&
    isset($_POST["product_quantity"]) &&
    isset($_POST["product_id"]) 
) {
 
  echo $_POST['product_id'];
    if (
     
        !empty($_POST["product_name"]) &&
        !empty($_POST["product_img"])  &&
        !empty($_POST["product_price"]) &&
        !empty($_POST["product_id"])  &&
        !empty($_POST["product_quantity"])
    ) {
      
      
   
    

// File upload path




echo $_POST['product_name'];
echo  $_POST['product_des'];
echo     $_POST['product_price'];
echo     $_POST['product_img'];
echo     $_POST['product_quantity'];
     
            
      echo $_POST['product_id'];

        $product = new product(
            null,
            $_POST['product_name'],
            $_POST['product_des'],
            $_POST['product_price'],
            $_POST['product_img'],
            $_POST['product_quantity']
        );
        $productC->updateproduct($product, $_POST['product_id']);
            
       
        echo "<br>";
        echo "t3ada";
      //  C:\xampp\htdocs\5edma\back\pages\tables.php
        
        header('Location:../back/pages/tables.php');
    } else {
        $error = "Missing information";
}
} 

?>