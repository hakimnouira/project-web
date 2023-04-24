<?php
require_once '../config.php';
require_once '../Model/Livreur.php';

class LivreurC
{
    public function listLivreur()
    {
        $sql = "SELECT * FROM livreur";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function deleteLivreur($idl)
    {
        $sql = "DELETE FROM livreur WHERE id = :id";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $idl);

        try {
            $req->execute();
            echo "<script>alert('deleted successfully!');</script>";
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }

    }

    function addLivreur($livreur)
    {
        $sql = "INSERT INTO livreur  
        VALUES (NULL, :n,:pr, :num,:em,:ima)";
        $db = config::getConnexion();
        try {
            
            $query = $db->prepare($sql);
            $query->execute([
                'n' => $livreur->getnom(),
                'pr' => $livreur->getprenom(),
                'num' => $livreur->getnumtel(),
                'em' => $livreur->getemail(),
                'ima' => $livreur->getimg(),
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    function updateLivreur($livreur, $id)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE livreur SET 
                    nom = :n, 
                    prenom = :pr, 
                    num_tel = :num, 
                    email = :em,
                    image = :ima
                WHERE id= :id '
            );
            $query->execute([
                'n' => $livreur->getnom(),
                'pr' => $livreur->getprenom(),
                'num' => $livreur->getnumtel(),
                'em' => $livreur->getemail(),
                'ima' => $livreur->getimg(),
                'id' =>$id
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    function showLivreur($id)
    {
        $sql = "SELECT * from livreur where id = $id";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $client = $query->fetch();
            return $client;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
}
