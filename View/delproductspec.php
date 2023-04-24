<?php
include '../Controller/productCspec.php';
$productC = new productCspec();
print_r( $_POST);
echo $_POST["id"];
$productC->deleteproductspec($_POST["id"]);
 header('Location:../back/pages/tables.php');