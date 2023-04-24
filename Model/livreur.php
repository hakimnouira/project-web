<?php
class Livreur
{
    private ?int $id = null;
    private ?string $nom = null;
    private ?string $prenom = null;
    private ?int $num_tel = null;
    private ?string $email = null;
    private ?string $image = null;

    public function __construct($id = null, $n, $p, $num, $em,$im)
    {
        $this->id = $id;
        $this->nom = $n;
        $this->prenom = $p;
        $this->num_tel = $num;
        $this->email = $em;
        $this->image = $im;
    }

    /**
     * Get the value of idClient
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of lastName
     */
    public function getprenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of lastName
     *
     * @return  self
     */
    public function setprenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get the value of firstName
     */
    public function getnom()
    {
        return $this->nom;
    }

    /**
     * Set the value of firstName
     *
     * @return  self
     */
    public function setnom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of address
     */
    public function getnumtel()
    {
        return $this->num_tel;
    }

    /**
     * Set the value of address
     *
     * @return  self
     */
    public function setnumtel($num_tel)
    {
        $this->num_tel = $num_tel;

        return $this;
    }

    public function getemail()
    {
        return $this->email;
    }
    /**
     * Set the value of email
     *
     * @return  self
     */

    public function setemail($email)
    {
        $this->email = $email;

        return $this;
    }
    

    /** 
     * Get the value of img
     */
    public function getimg()
    {
        return $this->image;
    }

    /**
     * Set the value of img
     *
     * @return  self
     */
    public function setimg($image)
    {
        $this->image = $image;

        return $this;
    }
}
