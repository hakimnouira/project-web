<?php

include "../../Model/Fournisseur.php";
include "../../Controller/FournisseurC.php";

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
        $prix = $_POST['prix'];
        $quantite = $_POST['quantite'];

        // vérifier si le prix et la quantité sont supérieurs à zéro
        if ($prix > 0 && $quantite > 0) {
            $fr = new Fournisseur(
                $_POST['nom'],
                $prix,
                $quantite,
                $_POST['description']
            );
            $frC->ajouterFournisseur($fr);
            header('Location:afficherFournisseur.php');
        } else {
            $error = "Le prix et la quantité doivent être supérieurs à zéro.";
        }
    }
    else {
        $error = "Toutes les informations requises doivent être renseignées.";
    }
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
    <link id="pagestyle" href="../assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
    
</head>

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
<style>
        body {
            background-image: url('../assets/img/im.jpg');
            background-size: cover;
            background-repeat: no-repeat;
          /*height: 50%;
          display: flex;
  align-items: center;
  justify-content: center;*/
  left: 20%;
        }
        .min-height-300 {
     min-height: 0px !important; 
}
    </style>
     <div class="min-height-300 bg-primary position-absolute w-100"></div>
  <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" target="_blank">
        <img src="../assets/img/0hub.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold">grren hub</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link " href="../pages/afficherFideliter.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Fideliter</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../pages/tables.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
              </div>
            <span class="nav-link-text ms-1">product
            </span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="../pages/afficherFournisseur.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Fournisseur</span>
          </a>
          <li class="nav-item">
          <a class="nav-link active" href="../pages/afficherFournisseur.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Event</span>
          </a>
        </li><li class="nav-item">
          <a class="nav-link " href="../pages/dashboard.html">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
      
       
       
       
       
      </ul>
    </div>
    
  </aside>
