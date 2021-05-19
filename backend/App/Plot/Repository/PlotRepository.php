<?php namespace App\Plot\Repository;


use App\Database\Connector;
use App\Database\Repository\Repository;
use App\Plot\Entity\PlotEntity;
use PDO;

class PlotRepository extends Repository {

    /**
     * PlotRepository constructor.
     */
    public function __construct() {
        parent::__construct();
    }

    public function getEntityName() {
        return "App\Plot\Entity\PlotEntity";
    }

    protected function getTableName() {
        return "plot";
    }

    public function getPlots(){
        $query = $this->prepare("Select * from " . $this->getTableName());

        $query->execute();

        return $query->fetchAll();
    }

}