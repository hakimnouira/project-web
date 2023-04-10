<?php
include '../config.php';
include '../Model/product.php';

class productC
{
    public function listproduct()
    {
        $sql = "SELECT * FROM products";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function deleteproduct($id)
    {
        $sql = "DELETE FROM products WHERE product_id  = :id";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $id);

        try {
            $req->execute();
      
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
            echo"5dem";
        }
    }

    function addproduct($product)
    {
        $sql = "INSERT INTO products  
        VALUES (NULL,:namee,:dess,:price,:img,:quantity)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'namee' => $product->getproductname(),
                'dess' => $product->getproductdes(),
                'price' => $product->getproductprice(),
                'img' => $product->getproductimg(),
                'quantity' => $product->getproductquantity()
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    function updateproduct($product, $id)
    {
        try {   
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE products SET 
                    product_name = :namee, 
                    product_des = :dess, 
                    product_img = :img,
                    product_price = :price, 
                   
                    product_quantity = :quantity
                WHERE product_id = :id '
            );
            /*
            echo "<br>";
            echo $id;
            echo "<br>";
            echo $product->getproductname();
            echo "<br>";
            echo $product->getproductdes(); 
            echo "<br>";
            echo $product->getproductprice();
            echo "<br>";
            echo $product->getproductimg();
            echo "<br>";
            echo $product->getproductquantity();
            echo "<br>";
            */
            $query->execute([
                'id' => $id,
                'namee' => $product->getproductname(),
                'dess' => $product->getproductdes(),
                'price' => $product->getproductprice(),
                'img' => $product->getproductimg(),
                'quantity' => $product->getproductquantity()

            ]);
           
            
           echo $query->rowCount() . " records UPDATED successfully <br>"; 
        } catch (PDOException $e) {
          
            $e->getMessage();
          
           
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
