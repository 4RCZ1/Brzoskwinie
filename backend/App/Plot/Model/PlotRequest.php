<?php


namespace App\Plot\Model;

use App\Plot\Entity\PlotEntity;

class PlotRequest {


    private $description;
    private $photo;

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     * @return PlotRequest
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
     * @return PlotRequest
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;
        return $this;
    }


}