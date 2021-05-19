<?php


namespace App\Plot\Controller;

use App\Router\RestBodyReader;
use App\Serializer\JsonSerializer;
use App\Plot\Model\PlotRequest;
use App\Plot\Service\PlotService;

/**
 * @Controller(path="/plot")
 */
class PlotController {
    /**
     * @var PlotService
     */

    private $plotService;

    /**
     * PlotController constructor.
     */
    public function __construct() {
        $this->plotService = new PlotService();
    }


    /**
     * @Action(method="GET")
     */
    public function getPlots() {
        $serializer = JsonSerializer::getInstance();
        $serializedEntity = $serializer->serialize($this->plotService->getPlots(), "json");
        echo $serializedEntity;
    }

    /**
     * @Action(method="POST")
     */
    public function addPlot() {
        /** @var PlotRequest $requestBody */
        $requestBody = RestBodyReader::readBody(PlotRequest::class);

        $plot = $this->plotService->addPlot($requestBody);

        echo JsonSerializer::getInstance()->serialize($plot, 'json');
    }

    /**
     * @Action(method="GET", path="/{id}")
     */
    public function getPlot($id) {
        $plot = $this->plotService->getPlot($id);
        echo JsonSerializer::getInstance()->serialize($plot, 'json');
    }

    /**
     * @Action(method="PUT", path="/{id}")
     */
    public function updatePlot($id) {
        echo sprintf("Updated plot with id: %s", array($id));
    }

    /**
     * @Action(method="DELETE", path="/{id}")
     */
    public function deletePlot($id) {
        echo sprintf("Deleted plot with id: %s", array($id));
    }
}