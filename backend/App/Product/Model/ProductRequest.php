<?php


namespace App\Product\Model;

use App\Product\Entity\ProductEntity;

class ProductRequest {


    private $productname;
    //private $password;

    /**
     * @return mixed
     */
    public function getProductname() {
        return $this->productname;
    }

    /**
     * @param mixed $email
     */
    public function setProductname($productname) {
        $this->productname = $productname;
    }

}