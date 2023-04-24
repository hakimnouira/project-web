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

		<button><a href="AjouterFournisseur.php">Ajouter un Fournisseur</a></button>
     	<hr>
		<table border=1 align = 'center'>
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
<form>
  <label for="idf">ID du fournisseur:</label>
  <input type="text" id="idf" name="idf">
  <button type="submit">Rechercher</button>
</form>