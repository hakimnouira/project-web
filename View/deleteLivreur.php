<?php
include '../Controller/LivreurC.php';
$livreurC = new LivreurC();
$livreurC->deleteLivreur($_GET["id"]);
header('Location:ListLivreur.php');
?>