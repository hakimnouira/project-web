<?php
include '../Controller/LivraisonC.php';
$livraisonC = new LivraisonC();
$livraisonC->supprimerlivraison($_GET["id_livraison"]);
header('Location:afficherlivraison.php');
?>