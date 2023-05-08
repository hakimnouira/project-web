<?PHP
include_once '../../Controller/FideliterC.php';

	$FideliterC=new FideliterC();
	
	if (isset($_POST["idfideliter"])){
		$FideliterC->supprimerFideliter($_POST["idfideliter"]);
		header('Location:afficherFideliter.php');
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GREEN HUB - GREEN HUB</title>
    <link rel="stylesheet" href="../temp.css">
    <style>
        body {
            background-image: url('img.jpg');
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>
</head>