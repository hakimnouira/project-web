<?php
class productspec
{
    private ?int $productspec_id  = null;

    private ?int $productspec_weight = null;
    private ?float $productspec_dimensions_min = null;
    private ?float $productspec_dimensions_max = null;
    private ?float $productspec_price_max = null;
 

    public function __construct($id = null, $weight, $dimensions1 ,$dimensions2 , $price)
    {


        $this->productspec_id  = $id;
   
        
        $this->productspec_weight = $weight;
        $this->productspec_dimensions_min  = $dimensions1;

        $this->productspec_dimensions_max= $dimensions2;
        $this->productspec_price_max =$price;
       
    }

    /**
     * Get the value of id-product
     */
    public function getIdproduct_spec()
    {
        return $this->productspec_id;
    }

    /**
     * Get the value of lastName
     */
    public function getproductspec_size()
    {
       
        return $this->productspec_size;
    }

    /**
     * Set the value of lastName
     *
     * @return  self
     */
    public function setproductspec_size($name)
    {
        $this->productspec_size = $name;

        return $this;
    }

    /**
     * Get the value of firstName
     */
    public function getproductspec_weight()
    {
        return $this->productspec_weight;
    }


    




    
    public function setproductspec_weight($des)
    {
        $this->productspec_weight = $des;

        return $this;
    }








    public function getproductspec_price()
    {
        return $this->productspec_price_max;
    }


    




    
    public function setproductspec_price($des)
    {
        $this->productspec_price_max = $des;

        return $this;
    }





    /**
     * Get the value of address
     */
    public function getproductspec_dimensions_min()
    {
        return $this->productspec_dimensions_min;
    }

    /**
     * Set the value of address
     *
     * @return  self
     */
    public function setproductspec_dimensions_min($price)
    {
        $this->productspec_dimensions_min = $price;

        return $this;
    }

    public function getproductspec_dimensions_max()
    {
        return $this->productspec_dimensions_max;
    }

    /**
     * Set the value of address
     *
     * @return  self
     */
    public function setproductspec_dimensions_max($price)
    {
        $this->productspec_dimensions = $price;

        return $this;
    }

    public function getproductspec_price_max()
    {
        return $this->productspec_price_max;
    }

    /**
     * Set the value of address
     *
     * @return  self
     */
    public function setproductspec_price_max($price)
    {
        $this->productspec_price_max = $price;

        return $this;
    }


    public function __destruct() {
       
    }


}