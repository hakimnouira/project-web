<?PHP
	include "../controller/FournisseurC.php";

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
    <link rel="stylesheet" href="../temp.css">
	
    </head>
    <body>

      
    <script type="text/javascript"
 src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementIni
t"></script>
	<nav>
        <h1>Green Hub</h1>
        <div class="onglets">
            <a href="#">Home</a>
            <a href="#elbooks">Elbooks</a>
            <a href="#commande">Commande</a>
            <a href="#livraison">Livraison</a>
            <a href="#contact">Contact</a>
			<div id="google_translate_element"></div> 
      
            <script type="text/javascript"> 
    function googleTranslateElementInit() { 
      new google.translate.TranslateElement({pageLanguage: 'en'},
 'google_translate_element'); 
    } 
    </script> 
      <a href=".php" class="pdf"><button type="button" > Export Pdf </button></a>
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
            background-image: url('img.jpg');
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>
</head>
<a href="pdf.php" class="pdf"><button type="button" > Export Pdf </button></a>
<form>
  <label for="idf">ID du fournisseur:</label>
  <input type="text" id="idf" name="idf">
  <button type="submit">Rechercher</button>
</form>
<div class="input-group">
              <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
              <input type="text" id="search" class="form-control" placeholder="Type here...">
              
            </div>
			<script>
  const searchInput = document.getElementById('search');
  const tableRows = document.querySelectorAll('#fs tbody tr');

  searchInput.addEventListener('keyup', () => {
    const searchText = searchInput.value.toLowerCase();

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
