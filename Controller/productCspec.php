<?php
include_once $_SERVER["DOCUMENT_ROOT"] . "/5edma/config.php" ;
include_once  $_SERVER["DOCUMENT_ROOT"] . '/5edma/Model/productspec.php';

class productCspec
{
    public function listproductspec($id)
    {
        $sql = "SELECT * FROM  productspecc  INNER JOIN  products  on  products.product_id  =  productspecc.id_product
         where products.product_id = $id  ";
        $db = config::getConnexion();
       

        try {
          

         
            return   $db->query($sql);
        } catch (Exception $e) {
        
            die('Error:' . $e->getMessage());

        }
    }

    function deleteproductspec($id)
    {
        echo $id;
        $sql = "DELETE FROM productspecc WHERE id_spec  = :id ";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $id);

        try {
            $req->execute();
      echo "aaaaaaaaaa";
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
            echo $e;
            echo "bbb";
        }
    }

    function addproductspec($productspec,$id)
    {
        $sql = "INSERT INTO productspecc  
        VALUES (null,:id,:weight,:max,:price,:min)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'id' => $id,
                'weight' => $productspec->getproductspec_weight(),
                'max' => $productspec->getproductspec_dimensions_max(),
                'price' =>$productspec-> getproductspec_price(),
                'min' => $productspec-> getproductspec_dimensions_min()
              
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    function updateproductspec($productspec, $id)
    {
        try {   
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE productspecc  SET 
                    	weight = :weight,
                        dimensions_max = :max, 
                        price_max = :price,
                        dimensions_min = :min
                   
                    
                WHERE id_spec = :id '
            );
           
            $query->execute([
                'id' => $id,
                'weight' => $productspec->getproductspec_weight(),
                'max' => $productspec->getproductspec_dimensions_max(),
                'price' =>$productspec-> getproductspec_price(),
                'min' => $productspec-> getproductspec_dimensions_min()
               

            ]);
           
            
           echo $query->rowCount() . " records UPDATED successfully <br>"; 
        } catch (PDOException $e) {
          
            $e->getMessage();
          echo $e;
           
        }
    }

    function showproduct($id)
    {
        $sql = "SELECT * from product where product_id = $id";
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
}
