<?PHP
	include "../config.php";
	require_once '../Model/Fournisseur.php';

	class FournisseurC {

        function ajouterFournisseur($Fournisseur){
            $sql="INSERT INTO fs (ID, NOM FOURNISSUER, quantite, description) 
			VALUES (:ID,:prix,:quantite, :description)";
            $db = config::getConnexion();
            try{
                $query = $db->prepare($sql);

                $query->execute([
                    'ID' => $Fournisseur->getID(),
                    'Nom Fournisseur' => $Fournisseur->get<?PHP
	include "../config.php";
	require_once '../Model/Fournisseur.php';

	class FournisseurC {

        function ajouterFournisseur($Fournisseur){
            $sql="INSERT INTO fs (ID, NOM FOURNISSUER, quantite, description) 
			VALUES (:nom,:NOM FOURNISSUER,:quantite, :description)";
            $db = config::getConnexion();
            try{
                $query = $db->prepare($sql);

                $query->execute([
                    'ID' => $Fournisseur->getID(),
                    'categorie' => $Fournisseur->getNOMFOURNISSUER(),
                    'quantite' => $Fournisseur->getQuantite(),
                    'description' => $Fournisseur->getDescription()
                ]);
            }
            catch (Exception $e){
                echo 'Erreur: '.$e->getMessage();
            }
        }


        function afficherFournisseur(){
			
			$sql="SELECT * FROM fs";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}

		function supprimerFournisseur($id){
			$sql="DELETE FROM fs WHERE id= :id";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id',$id);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function modifierFournisseur($Fournisseur, $id){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE fs SET 
						nom = :nom, 
						NOM FOURNISSUER = :NOM FOURNISSUER,
						quantite = :quantite,
						description = :description
					WHERE id = :id'
				);
				$query->execute([
					'nom' => $Fournisseur->getNom(),
					'prix' => $Fournisseur->getPrix(),
					'quantite' => $Fournisseur->getQuantite(),
					'description' => $Fournisseur->getDescription(),
					'id' => $id
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		function recupererFournisseur($id){
			$sql="SELECT * from fs where id=$id";
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



?>(),
                    'MATRICULE FISCALE' => $Fournisseur->getMatriculeFiscale(),
                    'EMPLACEMENT SIEGE' => $Fournisseur->getDescription()
                ]);
            }
            catch (Exception $e){
                echo 'Erreur: '.$e->getMessage();
            }
        }


        function afficherFournisseur(){
			
			$sql="SELECT * FROM fs";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}

		function supprimerFournisseur($id){
			$sql="DELETE FROM fs WHERE id= :id";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id',$id);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function modifierFournisseur($Fournisseur, $id){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE fs SET 
						nom = :nom, 
						prix = :prix,
						quantite = :quantite,
						description = :description
					WHERE id = :id'
				);
				$query->execute([
					'nom' => $Fournisseur->getNom(),
					'prix' => $Fournisseur->getPrix(),
					'quantite' => $Fournisseur->getQuantite(),
					'description' => $Fournisseur->getDescription(),
					'id' => $id
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		function recupererFournisseur($id){
			$sql="SELECT * from fs where id=$id";
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