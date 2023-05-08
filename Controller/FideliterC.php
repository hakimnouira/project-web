<?PHP
	include_once $_SERVER["DOCUMENT_ROOT"] . "/5edma/config.php" ;

	include_once $_SERVER["DOCUMENT_ROOT"] . '/5edma/Model/Fideliter.php';

	class FideliterC {

        function ajouterFideliter($Fideliter){
            $sql="INSERT INTO fideliter (idf, nombre, categorie) 
			VALUES (:idf,:nombre,:categorie)";
            $db = config::getConnexion();
            try{
                $query = $db->prepare($sql);

                $query->execute([
                    'idf' => $Fideliter->getIdf(),
                    'nombre' => $Fideliter->getNombre(),
                    'categorie' => $Fideliter->getCategorie()
                ]);
            }
            catch (Exception $e){
                echo 'Erreur: '.$e->getMessage();
            }
        }


        function afficherFideliter(){
			
			$sql="SELECT * FROM fideliter";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}

		function supprimerFideliter($idfideliter){
			$sql="DELETE FROM fideliter WHERE idfideliter= :idfideliter";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':idfideliter',$idfideliter);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function modifierFideliter($Fideliter, $idfideliter){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE fideliter SET 
						idf = :idf, 
						nombre = :nombre,
						categorie = :categorie
					WHERE idfideliter = :idfideliter'
				);
				$query->execute([
					'idf' => $Fideliter->getIdf(),
					'nombre' => $Fideliter->getNombre(),
					'categorie' => $Fideliter->getCategorie(),
					'idfideliter' => $idfideliter
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		function recupererFideliter($idfideliter){
			$sql="SELECT * from fideliter where idfideliter=$idfideliter";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$fr=$query->fetch();
				return $fr;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		

		

		

	}



?>