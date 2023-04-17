<?php
include_once '../Model/Fournisseur.php';
include_once '../Controller/FournisseurC.php';


$error = "";

// create fournisseur
$fr = null;

// create an instance of the controller
$frC = new FournisseurC();
if (
    isset($_POST["nom"]) &&
    isset($_POST["prix"]) &&
    isset($_POST["quantite"]) &&
    isset($_POST["description"]) 
) {
    if (
        !empty($_POST["nom"]) &&
        !empty($_POST["prix"]) &&
        !empty($_POST["quantite"]) &&
        !empty($_POST["description"])
    ) {
        $fr = new Fournisseur(
            $_POST['nom'],
            $_POST['prix'],
            $_POST['quantite'],
            $_POST['description']
        );
        $frC->ajouterFournisseur($fr);
        header('Location:afficherFournisseur.php');
    }
    else
        $error = "Missing information";
}


?>
<!DOCTYPE html>
<html lang="en">
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GREEN HUB </title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../temp.css">
    
</head>
<body>
    <nav>
        <h1>Green Hub</h1>
        <div class="onglets">
            <a href="#">Home</a>
            <a href="#elbooks">Elbooks</a>
            <a href="#commande">Commande</a>
            <a href="#livraison">Livraison</a>
            <a href="#contact">Contact</a>
        </div>
    </nav>

<body>
<button><a href="afficherFournisseur.php">Retour à la liste</a></button>
<hr>

<div id="error">
    <?php echo $error; ?>
</div>

<form action="" method="POST">
    <table border="1" align="center">

        <tr>
            <td rowspan='6' colspan='1'>Fiche Personnelle</td>
            <td>
                <label for="nom">Nom:
                </label>
            </td>
            <td><input type="text" name="nom" id="nom" maxlength="20"></td>
        </tr>
        <tr>
            <td>
                <label for="prix">Prix:
                </label>
            </td>
            <td><input type="number" name="prix" id="prix" maxlength="20"></td>
        </tr>

        <tr>
            <td>
                <label for="quantite">Quantite:
                </label>
            </td>
            <td><input type="number" name="quantite" id="quantite" ></td>
        </tr>

        <tr>
            <td>
                <label for="description">Description:
                </label>
            </td>
            <td><input type="text" name="description" id="description" maxlength="20"></td>
        </tr>
       
       
        <tr>
            <td></td>
            <td>
                <input type="submit" value="Ajouter">
            </td>
            <td>
                <input type="reset" value="Annuler" >
            </td>
        </tr>
    </table>
</form>
</body>
</html>
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