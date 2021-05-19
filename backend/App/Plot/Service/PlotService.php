<?php


namespace App\Plot\Service;


use App\Plot\Entity\PlotEntity;
use App\Plot\Model\PlotRequest;
use App\Plot\Model\PlotResponse;
use App\Plot\Repository\PlotRepository;

class PlotService {

    /**
     * @var PlotRepository
     */
    private $plotRepository;

    /**
     * PlotService constructor.
     */
    public function __construct() {
        $this->plotRepository = new PlotRepository();
    }

    /**
     * @param PlotRequest $model
     * @return PlotResponse | bool
     * @throws \ReflectionException
     */
    public function addPlot(PlotRequest $model) {

        $plotEntity = new PlotEntity();

        $plotEntity->setDescription($model->getDescription());

        return $this->convertPlotEntityToPlotResponse($this->plotRepository->save($plotEntity));
    }

    /**
     * @param $id
     * @return PlotResponse
     */
    public function getPlot($id) {

        return $this->convertPlotEntityToPlotResponse($this->plotRepository->getById($id));
    }

    public function getPlots(){
        return $this->plotRepository->getPlots();
    }

    /**
     * @param PlotEntity $PlotEntity
     * @return PlotResponse | bool
     */
    private function convertPlotEntityToPlotResponse($plotEntity) {
        if (empty($plotEntity)) {
            return false;
        }

        $plotResponse = new PlotResponse();

        $plotResponse
            ->setId($plotEntity->getId())
            ->setDescription($plotEntity->getDescription())
            ->setPhoto($plotEntity->getPhoto())
            ->setIdAddress($plotEntity->getIdAddress());


        return $plotResponse;
    }
}