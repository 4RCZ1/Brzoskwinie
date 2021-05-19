<?php


namespace App\Plot\Model;

use App\Plot\Entity\PlotEntity;

class PlotResponse {

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
     * @return PlotResponse
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
     * @return PlotResponse
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
     * @return PlotResponse
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
     * @return PlotResponse
     */
    public function setIdAddress($id_address)
    {
        $this->id_address = $id_address;
        return $this;
    }


}