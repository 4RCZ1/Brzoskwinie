<?php namespace App\Plot\Entity;


use App\Database\Entity\Entity;

class PlotEntity extends Entity {

    private $id;
    private $description;
    private $photo;
    private $id_address;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return PlotEntity
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     * @return PlotEntity
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * @param mixed $photo
     * @return PlotEntity
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdAddress()
    {
        return $this->id_address;
    }

    /**
     * @param mixed $id_address
     * @return PlotEntity
     */
    public function setIdAddress($id_address)
    {
        $this->id_address = $id_address;
        return $this;
    }


}