<?php
	include '../model/livraison.php';
    include '../controller/livraisonC.php';
$livraisonC=new livraisonC();
$list=null;
$list = $livraisonC->afficherlivraison();

?>

<html>

<title>
    liste des livraisons
  </title>

  <h1>Liste des livraisons</h1>


  <table border="1" width="100%" class="table-responsive p-0"  >
        <tr>
            
            <th>produit</th>
            <th>id livreur</th>
            
            <th>Update</th>
            <th>Delete</th>
        </tr>
        <?php
        foreach ($list as $livraison) {
        ?>
            <tr>
            
                <td><?= $livraison['produit']; ?></td>
                <td><?= $livraison['id']; ?></td>
                
                
                
                
                
                <td align="center">
                    <form method="POST" action="updateLivraison.php">
                        <input type="submit" name="update" value="Update">
                        <input type="hidden" value=<?PHP echo $livraison['id_livraison']; ?> name="id_livraison">
                    </form>
                </td>
                <td>
                    <a href="deleteLivraison.php?id_livraison=<?php echo $livraison['id_livraison']; ?>" onclick="return confirm('Do you really want to delete?')" > Delete</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>



</html>