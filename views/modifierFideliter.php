<?php
	include "../controller/FideliterC.php";
	include_once '../Model/Fideliter.php';

	$FideliterC = new FideliterC();
	$error = "";
	
	if (
        isset($_POST["idf"]) && 
        isset($_POST["nombre"]) &&
        isset($_POST["categorie"])
	){
		if (
            !empty($_POST["idf"]) && 
            !empty($_POST["nombre"]) && 
            !empty($_POST["categorie"])
        ) {
            $fr = new Fideliter(
                $_POST['idf'],
                $_POST['nombre'], 
                $_POST['categorie']
			);
			
            $FideliterC->modifierFideliter($fr, $_GET['idfideliter']);
            header('refresh:5;url=afficherFideliter.php');
        }
        else
            $error = "Missing information";
	}

?>
<html>
	<head>
		<title>Modifier Fideliter</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		<button><a href="afficherFideliter.php">Retour à la liste</a></button>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
		
		<?php
			if (isset($_GET['idfideliter'])){
				$fr = $FideliterC->recupererFideliter($_GET['idfideliter']);
				
		?>
		<form action="" method="POST">
            <table align="center">
                <tr>
                    <td rowspan='7' colspan='1'>
						Fiche Personnelle
					</td>
                    <td>
                        <label for="idfideliter">Idfideliter:
                        </label>
                    </td>
                    <td>
						<input type="text" name="idfideliter" id="idfideliter"  value = "<?php echo $fr['Idfideliter']; ?>" disabled>
					</td>
				</tr>
				<tr>
					<td>
						<label for="idf">Idf:
						</label>
					</td>
					<td>
						<input type="text" name="idf" id="idf" maxlength="20" value = "<?php echo $fr['Idf']; ?>">
					</td>
				</tr>
                <tr>
                    <td>
                        <label for="nombre">Nombre:
                        </label>
                    </td>
                    <td><input type="text" name="nombre" id="nombre" maxlength="20" value = "<?php echo $fr['Nombre']; ?>"></td>
                </tr>
                
                <tr>
                    <td>
                        <label for="categorie">Categorie:
                        </label>
                    </td>
                    <td><input type="text" name="categorie" id="categorie"  value = "<?php echo $fr['Categorie']; ?>"></td>
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