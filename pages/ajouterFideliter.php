<?php
include_once '../../Model/Fideliter.php';
include_once '../../Controller/FideliterC.php';

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
        print_r ($fr);
        $frC->ajouterFideliter($fr);
      header('Location:afficherFideliter.php');
        exit;
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
    <link rel="stylesheet" href="../assets/css/temp.css">
    
</head>
<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title> Afficher Liste Fournisseur </title>
		<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site Vitrine - Frenchcoder</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../assets/css/temp.css">
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

<div class="min-height-300 bg-primary position-absolute w-100"></div>
  <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/argon-dashboard/pages/dashboard.html " target="_blank">
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
       
       
       
      </ul>
    </div>
    
  </aside>