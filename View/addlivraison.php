<?php
include '../model/livraison.php';
    include '../controller/livraisonC.php';
    include '../model/livreur.php';
    include '../controller/livreurC.php';

$livreurC = new livreurC();
$listelivreur=$livreurC->listlivreur();
    $error = "";

    // create produit
    $livraison = null;

    // create an instance of the controller
    $livraison1 = new livraisonC();
    if (
        isset($_POST['produit']) 
		   	
       

    ) {
        
        if (
            !empty($_POST['produit']) 
			      
        ) {
            $livraison = new livraison(
                null,
                $_POST['produit']
				
				
            );
            
            echo "hello im here";
            $livraison1->ajouterlivraison($livraison,$_POST['id']);
       
        }
        else
            $error = "Missing information";
            echo $error ; 
    }

    
?>

<html>

<form  action=""   method="POST" name="livraison">
 
  <label for="produit">Produit:</label>
  <input type="text" id="produit" name="produit" required>
  <label for="id">choisie un livreur
  </label>
                      <select class="form-control" name="id" id="id">
                      <?php
                           foreach($listelivreur as $livreur)
                      {
                         ?>
                            <option value="<?php echo $livreur['id'] ?>"><?php echo $livreur['nom'] ?></option>
                           <?php

                             }
                           ?>
  

                      </select>
  <button type="submit" value="save">submit</button>
</form>




</html>