<?php
class event
{
    private ?int $id_event  = null;
    private ?string $type = null;
    private ?string $place = null;
    private ?int $capacity = null;
    private ?DateTime $date = null;

    private ?string $description = null;

    public function __construct($id = null, $type, $place, $capacity,  $date , $description)
    {


        $this->id_event = $id;
        
        $this->type = $type;
        
        $this->place = $place;
        $this->capacity = $capacity;
        $this->date = $date;
        $this->description = $description;
    }

    /**
     * Get the value of id-product
     */
    public function getIdevent()
    {
        return $this->id_event;
    }

    /**
     * Get the value of lastName
     */
    public function gettype()
    {
       
        return $this->type;
    }

    /**
     * Set the value of lastName
     *
     * @return  self
     */
    public function settype($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get the value of firstName
     */
    public function getplace()
    {
        return $this->place;
    }

    /**
     * Set the value of firstName
     *
     * @return  self
     */
    public function setplace($place)
    {
        $this->place = $place;

        return $this;
    }

    /**
     * Get the value of address
     */
    public function getcapacity()
    {
        return $this->capacity;
    }

    /**
     * Set the value of address
     *
     * @return  self
     */
    public function setcapacity($capacity)
    {
        $this->capacity = $capacity;

        return $this;
    }

    /**
     * Get the value of dob
     */
    public function getdate()
    {
        return $this->date;
    }

    /**
     * Set the value of dob
     *
     * @return  self
     */
    public function setdate($date)
    {
        $this->date = $date;

        return $this;
    }





    public function getdescription()
    {
        return $this->description;
    }

    /**
     * Set the value of dob
     *
     * @return  self
     */
    public function setdescription($description)
    {
        $this->description= $description;

        return $this;
    }
}
