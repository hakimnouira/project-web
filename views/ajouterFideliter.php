<?php
include_once '../Model/Fideliter.php';
include_once '../Controller/FideliterC.php';

$error = "";
$fr = null;
$frC = new FideliterC();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idf = trim($_POST["idf"]);
    $nombre = trim($_POST["nombre"]);
    $categorie = trim($_POST["categorie"]);

    if (!ctype_digit($idf)) {
        $error .= "id";
        echo "<script type='text/javascript'>alert(`$error `);</script>";
    }

    if (!ctype_digit($nombre)) {
        $error .= "nombre manquant";

        echo "<script type='text/javascript'>alert(`$error `);</script>";
    }

    if (empty($categorie) || !in_array($categorie, ['Bronze', 'Argent', 'Or'])) {
       
        echo "<script type='text/javascript'>alert(`$error `);</script>";
    }

    if (empty($error)) {
        $fr = new Fideliter($idf, $nombre, $categorie);
        $frC->ajouterFideliter($fr);
        header('Location:afficherFideliter.php');
        exit;
    }
}
?>


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
<button><a href="afficherFideliter.php">Retour à la liste</a></button>
<hr>

<div id="error">
    <?php echo $error; ?>
</div>

<form action="" method="POST">
    <table border="1" align="center">

        <tr>
            <td rowspan='6' colspan='1'>Fiche Personnelle</td>
            <td>
                <label for="idf">Idf:
                </label>
            </td>
            <td><input type="number" name="idf" id="idf" maxlength="20"></td>
        </tr>
        <tr>
            <td>
                <label for="nombre">Nombre:
                </label>
            </td>
            <td><input type="number" name="nombre" id="nombre" maxlength="20"></td>
        </tr>

        <tr>
            <td>
                <label for="categorie">Categorie:
                </label>
            </td>
            <td><input type="text" name="categorie" id="categorie" ></td>
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