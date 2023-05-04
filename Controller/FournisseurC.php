<?PHP
	include "../config.php";
	require_once '../Model/Fournisseur.php';

	class FournisseurC {

        function ajouterFournisseur($Fournisseur){
            $sql="INSERT INTO fs (nom, prix, quantite, description) 
			VALUES (:nom,:prix,:quantite, :description)";
            $db = config::getConnexion();
            try{
                $query = $db->prepare($sql);

                $query->execute([
                    'nom' => $Fournisseur->getNom(),
                    'prix' => $Fournisseur->getPrix(),
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
	
		public function search($keyword)
		{
			$db = Config::getConnexion();
			$keyword = '%'.$keyword.'%'; // ajouter des wildcards pour faire une recherche partielle
			$query = "SELECT * FROM fs WHERE  nom LIKE :keyword ";
			$stmt = $db->prepare($query);
			$stmt->bindParam(':keyword', $keyword);
			$stmt->execute();
			return $stmt->fetchAll();
		}
		function afficherMoyennePrix() {
			$db = config::getConnexion();
			$sql = "SELECT AVG(prix) AS moyenne_prix FROM fs";
			try {
				$query = $db->query($sql);
				$result = $query->fetch(PDO::FETCH_ASSOC);
				$moyenne_prix = $result['moyenne_prix'];
				echo "La moyenne des prix est  : " . $moyenne_prix;
			} catch (PDOException $e) {
				die('Erreur: '.$e->getMessage());
			}
		}	
		
		

		

	}



?>