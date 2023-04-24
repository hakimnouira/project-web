<?php

    include '../controller/livraisonC.php';
    
    include '../controller/livreurC.php';



    $error = "";

    // create produit
    $livraison = null;

    // create an instance of the controller
    $livraisonC = new livraisonC();
    if (
        isset($_POST['produit']) 
		   	
       

    ) {
        
        if (
            !empty($_POST['produit']) 
			      
        ) {;
            echo $_POST ["produit"];
            $livraison = new livraison(
                null,
                $_POST['produit'],
                
				
				
            );
            
           
            $livraisonC->modifierlivraison($livraison,$_POST['id_livraison']);
           // echo "hello im here";
            //header('Location:afficherlivraison.php');
        }
        else
            $error = "Missing information";
            echo $error ; 
    }

    
?>


<html lang="en">


<body>
<?php

    if (isset($_POST['id_livraison'])) {
        $livraison = $livraisonC->recupererlivraison($_POST['id_livraison']);

    ?>
<form  action=""   method="POST" >
<input type="hidden" name="id_livraison" id="id_livraison" value="<?php echo $livraison['id_livraison']; ?>" >
 <label for="produit">Produit:</label>
 
 <td><input type="text" name="produit" id="produit" value="<?php echo $livraison['produit']; ?>" ></td>
 </label>
 <td><input type="text" name="id" id="id" value="<?php echo $livraison['id']; ?>"  readonly ></td>  
                    

                    
 <button type="submit" value="Update"></button>
</form>

</body>





<?php 
    }
    ?>
</html>