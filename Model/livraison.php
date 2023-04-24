<?php
class livraison
{
    private ?int $id_livraison = null;
    private ?string $produit = null;


    public function __construct($id = null, $p)
    {
        $this->id_livraison = $id;
        $this->produit = $p;
        
    }

    /**
     * Get the value of idCourse
     */
    public function getIdlivraison()
    {
        return $this->id_livraison;
    }

    /**
     * Get the value of label
     */
    public function getproduit()
    {
        return $this->produit;
    }

    /**
     * Set the value of label
     *
     * @return  self
     */
    public function setproduit($produit)
    {
        $this->produit = $produit;

        return $this;
    }

    /**
     * Get the value of duration
     */
   
}
