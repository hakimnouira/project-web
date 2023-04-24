<?php
include '../Controller/productCspec.php';
$productC = new productCspec();




$error = "";



// create client


// create an instance of the controller 

 
print_r( $_POST );

if (
    isset($_POST["dimensions__max2"]) &&
    isset($_POST["dimensions__min2"]) &&
    isset($_POST["price"]) &&
    isset($_POST["id"])&&
    isset($_POST["wight"]) 
  
) {
     
  echo"aaaaaaa";

    if (
     
        !empty($_POST["dimensions__max2"]) &&
        !empty($_POST["dimensions__min2"])  &&
        !empty($_POST["price"]) &&
        !empty($_POST["wight"]) &&
      
        !empty($_POST["id"])
    ) {
      
      
   
    

// File upload path





        $productCspec = new productspec(
            $_POST["id"]  ,
            $_POST["wight"] ,
           $_POST["dimensions__max2"] ,
           $_POST["dimensions__min2"],
           $_POST["price"] 
         
          
        );
        $productC->addproductspec($productCspec, $_POST["id"]);
            
     
        
       header('Location:../back/pages/tables.php');
    } else {
        $error = "Missing information";
        echo    $error ;
}
} 

?>