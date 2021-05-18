<?php namespace App\Product\Repository;


use App\Database\Connector;
use App\Database\Repository\Repository;
use App\Product\Entity\ProductEntity;
use PDO;

class ProductRepository extends Repository {

    /**
     * UserRepository constructor.
     */
    public function __construct() {
        parent::__construct();
    }

    public function getEntityName() {
        return "App\User\Entity\ProductEntity";
    }

    protected function getTableName() {
        return "product";
    }

    public function getProducts(){
        $query = $this->prepare("Select * from " . $this->getTableName());

        $query->execute();

        return $query->fetchAll();
    }

}