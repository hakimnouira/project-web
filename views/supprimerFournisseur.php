<?PHP
	include "../controller/FournisseurC.php";

	$FournisseurC=new FournisseurC();
	
	if (isset($_POST["id"])){
		$FournisseurC->supprimerFournisseur($_POST["id"]);
		header('Location:afficherFournisseur.php');
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