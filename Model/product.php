<?php
class product
{
    private ?int $product_id  = null;
    private ?string $product_name = null;
    private ?string $product_des = null;
    private ?float $product_price = null;
    private ?string $product_img = null;
    private ?int $product_quantity = null;

    public function __construct($id = null, $name, $des, $price, $img , $quantity)
    {


        $this->product_id  = $id;
        
        $this->product_name = $name;
        
        $this->product_des = $des;
        $this->product_price = $price;
        $this->product_img = $img;
        $this->product_quantity = $quantity;
    }

    /**
     * Get the value of id-product
     */
    public function getIdproduct()
    {
        return $this->product_id;
    }

    /**
     * Get the value of lastName
     */
    public function getproductname()
    {
       
        return $this->product_name;
    }

    /**
     * Set the value of lastName
     *
     * @return  self
     */
    public function setproductName($name)
    {
        $this->product_name = $name;

        return $this;
    }

    /**
     * Get the value of firstName
     */
    public function getproductdes()
    {
        return $this->product_des;
    }

    /**
     * Set the value of firstName
     *
     * @return  self
     */
    public function setproductdes($des)
    {
        $this->product_des = $des;

        return $this;
    }

    /**
     * Get the value of address
     */
    public function getproductprice()
    {
        return $this->product_price;
    }

    /**
     * Set the value of address
     *
     * @return  self
     */
    public function setproductprice($price)
    {
        $this->product_price = $price;

        return $this;
    }

    /**
     * Get the value of dob
     */
    public function getproductimg()
    {
        return $this->product_img;
    }

    /**
     * Set the value of dob
     *
     * @return  self
     */
    public function setproductimg($img)
    {
        $this->product_img = $img;

        return $this;
    }





    public function getproductquantity()
    {
        return $this->product_quantity;
    }

    /**
     * Set the value of dob
     *
     * @return  self
     */
    public function setproductquantity($quantity)
    {
        $this->product_quantity= $quantity;

        return $this;
    }
}
