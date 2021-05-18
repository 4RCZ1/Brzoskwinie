<?php


namespace App\Product\Model;

use App\Product\Entity\ProductEntity;

class ProductResponse {

    private $id;
    private $productname;
    private $description;
    private $price;
    private $harvestdate;
    private $photo;
    private $id_plot;
    private $id_type;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return ProductResponse
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getProductname()
    {
        return $this->productname;
    }

    /**
     * @param mixed $productname
     * @return ProductResponse
     */
    public function setProductname($productname)
    {
        $this->productname = $productname;
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
     * @return ProductResponse
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     * @return ProductResponse
     */
    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getHarvestdate()
    {
        return $this->harvestdate;
    }

    /**
     * @param mixed $harvestdate
     * @return ProductResponse
     */
    public function setHarvestdate($harvestdate)
    {
        $this->harvestdate = $harvestdate;
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
     * @return ProductResponse
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdPlot()
    {
        return $this->id_plot;
    }

    /**
     * @param mixed $id_plot
     * @return ProductResponse
     */
    public function setIdPlot($id_plot)
    {
        $this->id_plot = $id_plot;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdType()
    {
        return $this->id_type;
    }

    /**
     * @param mixed $id_type
     * @return ProductResponse
     */
    public function setIdType($id_type)
    {
        $this->id_type = $id_type;
        return $this;
    }



}