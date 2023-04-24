<?php
require_once '../config.php';
require_once '../Model/Livraison.php';

class LivraisonC
{
   /* function showCourse($libelle) //recherche
    {
        $sql = "SELECT * FROM course WHERE label LIKE '%" . $libelle . "%'";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $courses = $query->fetchAll();
            return $courses;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }*/

    

    public function afficherlivraison()
    {
        $sql = "SELECT * FROM livraison";
        $db = config::getConnexion();
        try {
            $list = $db->query($sql);
            return $list;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    public function supprimerlivraison($id_livraison){
        $sql="DELETE FROM livraison WHERE id_livraison=:id_livraison";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':id_livraison', $id_livraison);
        try{
            $req->execute();
        }
        catch(Exception $e){
            die('Erreur:'. $e->getMessage());
        }
    }

    public function ajouterlivraison($livraison,$id){
        $sql="INSERT INTO livraison 
        VALUES (NULL,:produit,:id)";
        $db = config::getConnexion();
        try{
            $query = $db->prepare($sql);
            $query->execute([
            
                
                
                'produit' => $livraison->getproduit(),
                'id' => $id
                
                
            ]);			
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }			
    }

    function recupererlivraison($id_livraison){
        $sql="SELECT * from livraison where id_livraison=$id_livraison";
        $db = config::getConnexion();
        try{
            $query=$db->prepare($sql);
            $query->execute();

            $livraison=$query->fetch();
            return $livraison;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }




    

    public function modifierlivraison($livraison, $id_livraison){
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE livraison SET 
                    id_livraison = null,
                    produit= :produit ,
                    id=null
                    
                    
                WHERE id_livraison = :id_livraison'
            );
            $query->execute([
                'id_livraison'=>$id_livraison,
                'produit' => $livraison->getproduit(),
                
                'id'=>null
                
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
            echo $e;
        }
    }

    
}
