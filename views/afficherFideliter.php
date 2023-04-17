<?PHP
	include "../controller/FideliterC.php";

	$FideliterC=new FideliterC();
	$listef=$FideliterC->afficherFideliter();

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

		<button><a href="AjouterFideliter.php">Ajouter une Fideliter</a></button>
     	<hr>
		<table border=1 align = 'center'>
			<tr>
				<th>Id</th>
				<th>Idf</th>
				<th>Nombre</th>
				<th>Categorie</th>
			</tr>

			<?PHP
				foreach($listef as $fr){
			?>
				<tr>
					<td><?PHP echo $fr['Idfideliter']; ?></td>
					<td><?PHP echo $fr['Idf']; ?></td>
					<td><?PHP echo $fr['Nombre']; ?></td>
					<td><?PHP echo $fr['Categorie']; ?></td>
					<td>
						<form method="POST" action="supprimerFideliter.php">
						<input type="submit" name="supprimer" value="supprimer">
						<input type="hidden" value=<?PHP echo $fr['Idfideliter']; ?> name="idfideliter">
						</form>
					</td>
					<td>
						<a href="modifierFideliter.php?idfideliter=<?PHP echo $fr['Idfideliter']; ?>"> Modifier </a>
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
