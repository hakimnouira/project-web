<?php
	include "../controller/FournisseurC.php";
	include_once '../Model/Fournisseur.php';

	$FournisseurC = new FournisseurC();
	$error = "";
	
	if (
        isset($_POST["nom"]) && 
        isset($_POST["prix"]) &&
        isset($_POST["quantite"]) && 
        isset($_POST["description"])
	){
		if (
            !empty($_POST["nom"]) && 
            !empty($_POST["prix"]) && 
            !empty($_POST["quantite"]) && 
            !empty($_POST["description"]) 
        ) {
            $fr = new Fournisseur(
                $_POST['nom'],
                $_POST['prix'], 
                $_POST['quantite'],
                $_POST['description']
			);
			
            $FournisseurC->modifierFournisseur($fr, $_GET['id']);
            header('refresh:5;url=afficherFournisseur.php');
        }
        else
            $error = "Missing information";
	}

?>
<html>
	<head>
		<title>Modifier Fournisseur</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		<button><a href="afficherFournisseur.php">Retour à la liste</a></button>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
		
		<?php
			if (isset($_GET['id'])){
				$fr = $FournisseurC->recupererFournisseur($_GET['id']);
				
		?>
		<form action="" method="POST">
            <table align="center">
                <tr>
                    <td rowspan='7' colspan='1'>
						Fiche Personnelle
					</td>
                    <td>
                        <label for="id">Id:
                        </label>
                    </td>
                    <td>
						<input type="text" name="id" id="id"  value = "<?php echo $fr['Id']; ?>" disabled>
					</td>
				</tr>
				<tr>
					<td>
						<label for="nom">Nom:
						</label>
					</td>
					<td>
						<input type="text" name="nom" id="nom" maxlength="20" value = "<?php echo $fr['Nom']; ?>">
					</td>
				</tr>
                <tr>
                    <td>
                        <label for="prix">Prix:
                        </label>
                    </td>
                    <td><input type="text" name="prix" id="prix" maxlength="20" value = "<?php echo $fr['Prix']; ?>"></td>
                </tr>
                
                <tr>
                    <td>
                        <label for="quantite">Quantite:
                        </label>
                    </td>
                    <td><input type="text" name="quantite" id="quantite"  value = "<?php echo $fr['Quantite']; ?>"></td>
                </tr>
                <tr>
                    <td>
                        <label for="description">Description:
                        </label>
                    </td>
                    <td><input type="text" name="description" id="description"  value = "<?php echo $fr['Description']; ?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Modifier" name = "modifer"> 
                    </td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>
                </tr>
            </table>
        </form>
		<?php
		}
		?>
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