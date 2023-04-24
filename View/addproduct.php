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
    isset($_POST["product_quantity"]) 
  
) {
 
  
    if (
     
        !empty($_POST["product_name"]) &&
        !empty($_POST["product_img"])  &&
        !empty($_POST["product_price"]) &&
      
        !empty($_POST["product_quantity"])
    ) {
      
      
   
    

// File upload path





        $product = new product(
            null,
            $_POST['product_name'],
            $_POST['product_des'],
            $_POST['product_price'],
            $_POST['product_img'],
            $_POST['product_quantity']
        );
        $productC->addproduct($product);
            
     
        
        header('Location:../back/pages/tables.php');
    } else {
        $error = "Missing information";
        
}
} 

?>