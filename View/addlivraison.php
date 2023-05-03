<?php
include '../model/livraison.php';
    include '../controller/livraisonC.php';
    include '../model/livreur.php';
    include '../controller/livreurC.php';

$livreurC = new livreurC();
$listelivreur=$livreurC->listlivreur();
    $error = "";

    // create produit
    $livraison = null;

    // create an instance of the controller
    $livraison1 = new livraisonC();
    if (
        isset($_POST['produit']) 
		   	
       

    ) {
        
        if (
            !empty($_POST['produit']) 
			      
        ) {
            $livraison = new livraison(
                null,
                $_POST['produit']
				
				
            );
            
            echo "hello im here";
            $livraison1->ajouterlivraison($livraison,$_POST['id']);
       
        }
        else
            $error = "Missing information";
            echo "<script> alert('change product name');</script>";
            
    }

    
?>

<html>

<head>
<meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/0hubcrpd.png">
  <title>
    Ajout de livraison
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
          <a class="nav-link  " href="addLivreur.php">
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
          <a class="nav-link active" href="addlivraison.php">
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
<form  action=""   method="POST" name="livraison">
<table border="1" align="center">
<tr>
                <td>
  <label for="produit">Produit:</label>
</td>
<td> <input type="text" id="produit" name="produit"></td>
</tr> 
<br>

  
<tr>
                <td> 
  <label for="id" >choisie un livreur
  </label>
  <td> <select class="form-control" name="id" id="id">
                      <?php
                           foreach($listelivreur as $livreur)
                      {
                         ?>
                            <option value="<?php echo $livreur['id'] ?>"><?php echo $livreur['nom'] ?></option>
                           <?php

                             }
                           ?>
  

                      </select></td>
                            <td>
  <button type="submit" value="save">submit</button></td>
</form>
                            </table>
                            <script>
                              function validateForm(event) {
  // prevent the form from submitting if validation fails
  event.preventDefault();

  // get the values of the form inputs
  const produit = document.querySelector('#produit').value.trim();
  
  // validate the inputs
  if (!validateName(produit)) {
    alert("please enter a product name.");
    return false;
  }
  return true;  
  function validateName(produit) {
  // Validate if the name contains only letters using a regular expression
  const regex = /^[a-zA-Z]+$/;
  return regex.test(produit);
}


  // if all validation passes, submit the form
  this.submit();
}




                            </script>




</html>