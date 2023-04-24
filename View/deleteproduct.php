<?php
include '../Controller/productC.php';
$productC = new productC();
echo  $_POST["idpro"];
$productC->deleteproduct( $_POST["idpro"]);
    header('Location:../back/pages/tables.php');
