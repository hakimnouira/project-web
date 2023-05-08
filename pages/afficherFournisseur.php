<?PHP
	include "../../Controller/FournisseurC.php";

	$FournisseurC=new FournisseurC();
	$listef=$FournisseurC->afficherFournisseur();
	

?>

<html>

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
    <body>

      









  <!-- Navbar -->
  <div class="min-height-300 bg-primary position-absolute w-100"></div>
  <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0"target="_blank">
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
          <a class="nav-link " href="/5edma/view/listevent.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Event</span>
          </a>

        </li><li class="nav-item">
          <a class="nav-link " href="/5edma/view/afficherlivraison.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Livraison</span>
          </a>
        </li>
      
       
       
       
       
      </ul>
    </div>
    
  </aside>


    <!-- Navbar -->



















    <script type="text/javascript"
 src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementIni
t"></script>
	<nav>
        <h1>Green Hub</h1>
        <div class="onglets">
           
			<div id="google_translate_element"></div> 
      
            <script type="text/javascript"> 
    function googleTranslateElementInit() { 
      new google.translate.TranslateElement({pageLanguage: 'en'},
 'google_translate_element'); 
    } 
    </script> 
      
    <script type="text/javascript"
 src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementIni
t"></script>
        </div>
		
    </nav>

		<button><a href="AjouterFournisseur.php">Ajouter un Fournisseur</a></button>
     	<hr>
		<table border=1 align = 'center' id="fs">
			<tr>
				<th>Id</th>
				<th>Nom</th>
				<th>Prix</th>
				<th>Quantite</th>
				<th>Description</th>
				
			</tr>

			<?PHP
				foreach($listef as $fr){
			?>
				<tr>
					<td><?PHP echo $fr['Id']; ?></td>
					<td><?PHP echo $fr['Nom']; ?></td>
					<td><?PHP echo $fr['Prix']; ?></td>
					<td><?PHP echo $fr['Quantite']; ?></td>
					<td><?PHP echo $fr['Description']; ?></td>
					<td>
						<form method="POST" action="supprimerFournisseur.php">
						<input type="submit" name="supprimer" value="supprimer">
						<input type="hidden" value=<?PHP echo $fr['Id']; ?> name="id">
						</form>
					</td>
					<td>
						<a href="modifierFournisseur.php?id=<?PHP echo $fr['Id']; ?>"> Modifier </a>
					</td>
				</tr>
			<?PHP
				}
			?>
		</table>
		<script type="text/javascript"> 
    function googleTranslateElementInit() { 
      new google.translate.TranslateElement({pageLanguage: 'fr'},
 'google_translate_element'); 
    } 
    </script> 
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
</head>
<a href="/5edma/view/pdf.php" class="pdf"><button type="button" > Export Pdf </button></a>

<div class="input-group">
              <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
              <input type="text" id="search"  placeholder="Type here..."  >
              
            </div>
			<div style="position: fixed; bottom: 0; left: 0; background-color: #fff; padding: 10px;">
			
			<?php
			
			$listef=$FournisseurC->afficherMoyennePrix();
			
			?>
</div>
			<script>
  const searchInput = document.getElementById('search');
  const tableRows = document.querySelectorAll('#fs tbody tr');

  searchInput.addEventListener('keyup', () => {                      //ecouteur d'evenement 
    const searchText = searchInput.value.toLowerCase();            //apple d'infomration and covetissage 

    tableRows.forEach(row => {
      const rowData = row.textContent.toLowerCase();
      if (rowData.includes(searchText)) {
        row.style.display = '';
      } else {
        row.style.display = 'none';
      }
    });
  });
</script>
