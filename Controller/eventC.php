<?php
include_once $_SERVER["DOCUMENT_ROOT"] . "/5edma/config.php" ;
include_once $_SERVER["DOCUMENT_ROOT"] . '/5edma/Model/event.php';


class eventC
{
    public function listevent()
    {
        $sql = "SELECT * FROM event";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function deleteEvent($id)
    {
        $sql = "DELETE FROM event WHERE id_event = :id";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $id);

        try {
            $req->execute();
      
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
            
        }
    }

    function addevent($event)
    {
        $sql = "INSERT INTO event
        VALUES (NULL,:type,:place,:capacity,:date,:description,:image)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'type' => $event->gettype(),
                'place' => $event->getplace(),
                'capacity' => $event->getcapacity(),
                'date' => $event->getdate()->format('Y/m/d'),
                'description' => $event->getdescription(),
                'image' => $event->getimage()
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    function updateEvent($event, $id)
    {
        try {   
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE event SET 
                    type = :type, 
                    place = :place,
                    capacity = :capacity, 
                    date = :date, 
                   
                    description = :description,
                    image = :image
                WHERE id_event = :id '
            );
           
            $query->execute([
                'id' => $id,
                'type' => $event->gettype(),
                'place' => $event->getplace(),
                'capacity' => $event->getcapacity(),
                'date' => $event->getdate()->format('Y/m/d'),
                'description' => $event->getdescription(),
                'image' => $event->getimage()

            ]);
           
            
           echo $query->rowCount() . " records UPDATED successfully <br>"; 
        } catch (PDOException $e) {
          
            $e->getMessage();
          
           
        }
    }

    function showevent($id)
    {
        $sql = "SELECT * from event where id_event = $id";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $product = $query->fetch();
            return $product;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }

function searchevent($firstName)
    {
        $sql = "SELECT * FROM event WHERE  (place LIKE '%" . $firstName . "%') || (type LIKE '%" . $firstName . "%') ";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $event = $query->fetchAll();
            return $event;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
    

}
