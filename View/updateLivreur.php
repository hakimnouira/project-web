<?php

include '../Controller/LivreurC.php';

$error = "";

// create client
$livreur = null;

// create an instance of the controller
$livreurC = new LivreurC();
if (
    isset($_POST["nom"]) &&
    isset($_POST["prenom"]) &&
    isset($_POST["num_tel"]) &&
    isset($_POST["email"]) &&
    isset($_POST["image"])
) {
    if (
        !empty($_POST['nom']) &&
        !empty($_POST["prenom"]) &&
        !empty($_POST["num_tel"]) &&
        !empty($_POST["email"]) && 
        !empty($_POST["image"])
    ) {echo $_POST ['id'];
        echo  $_POST['nom'];
        echo $_POST['prenom'];
        echo $_POST['num_tel'];
        echo $_POST['email'];
        echo $_POST['image'];
        $livreur = new Livreur(
            null,
            $_POST['nom'],
            $_POST['prenom'],
            $_POST['num_tel'],
            $_POST['email'],
            $_POST['image']
        );
        $livreurC->updateLivreur($livreur,$_POST["id"]);
      //  header('Location:ListLivreur.php');
    } else
        $error = "Missing information";
}

?>
<html lang="en">

<head>
<meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/0hubcrpd.png">
  <title>
    liste des livreurs
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
</head>


<body class="g-sidenav-show   bg-gray-100">
    <nav>
<div class="min-height-300 bg-primary position-absolute w-100"></div>
  <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/argon-dashboard/pages/dashboard.html " target="_blank">
        <img src="../assets/img/0hubcrpd.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold">GreenHub Dashboard</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="ListLivreur.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Liste Livreurs</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="addLivreur.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Add livreur</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="afficherlivraison.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-credit-card text-success text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">liste livraison</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="addlivraison.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-credit-card text-success text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">ajouter livraison</span>
          </a>
        </li>
      </ul>
    </div>
</nav>
</div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
         
    <button><a href="ListLivreur.php">Back to list</a></button>
    <hr>

    <div id="error">
        <?php echo $error; ?>
    </div>

    <?php
    if (isset($_POST['id'])) {
        $livreur = $livreurC->showLivreur($_POST['id']);

    ?>
<form action="" method="POST">
        <table border="1" align="center">
        
              
                <input type="hidden" name="id" id="id" value="<?php echo $livreur['id']; ?>" >
           
            
                <td>
                    <label for="nom">First Name:
                    </label>
                </td>
                <td><input type="text" name="nom" id="nom" value="<?php echo $livreur['nom']; ?>" ></td>
            </tr>
            <tr>
                <td>
                    <label for="prenom">Last Name:
                    </label>
                </td>
                <td><input type="text" name="prenom" id="prenom" value="<?php echo $livreur['prenom']; ?>" ></td>
            </tr>
            <tr>
                <td>
                    <label for="num_tel">Numéro telephone:
                    </label>
                </td>
                <td>
                    <input type="text" name="num_tel" id="num_tel" value="<?php echo $livreur['num_tel']; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="email">email:
                    </label>
                </td>
                <td>
                    <input type="email" name="email" id="email" value="<?php echo $livreur['email']; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="image">image:
                    </label>
                </td>
                <td>
                    <input type="text" name="image" id="image" value="<?php echo $livreur['image']; ?>">
                </td>
            </tr>
            <tr align="center">
                <td>
                    <input type="submit" value="Update">
                </td>
                <td>
                    <input type="reset" value="Reset">
                </td>
            </tr>
        </table>
    </form>
    <script>
  function validateForm(event) {
  const nom = document.getElementById("nom").value;
  const prenom = document.getElementById("prenom").value;
  const num_tel = document.getElementById("num_tel").value;
  const image = document.getElementById("image").value;
  const email = document.getElementById("email").value;

  // Check if the required fields are filled in
  if (nom.trim() === "" || prenom.trim() === "" || num_tel.trim() === "" || image.trim() === "" || email.trim() === "") {
    alert("Veuillez remplir tous les champs obligatoires.");
    return false;
  }

  // Check if the phone number is valid
  if (!validatePhone(num_tel)) {
    alert("Veuillez saisir un numéro de téléphone valide.");
    return false;
  }

  // Check if the email is valid
  if (!validateEmail(email)) {
    alert("Veuillez saisir une adresse e-mail valide.");
    return false;
  }
  if (!validateName(nom)) {
    alert("Veuillez saisir un nom valide.(chiffres non acceptés)");
    return false;
  }

  // If all fields are valid, allow the form to be submitted
  return true;
  function validatePhone(phone) {
    // Vérifie si le numéro de téléphone est valide en utilisant une expression régulière
    const regex = /^\d{8}$/;
    return regex.test(phone);
  }

  function validateEmail(email) {
    // Vérifie si l'adresse e-mail est valide en utilisant une expression régulière
    const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return regex.test(email);
  }
  function validateName(nom) {
  // Validate if the name contains only letters using a regular expression
  const regex = /^[a-zA-Z]+$/;
  return regex.test(nom);
}
}
</script> 
       
    <?php
    }
    ?>
</body>

</html>