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

<body>
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
       
    <?php
    }
    ?>
</body>

</html>