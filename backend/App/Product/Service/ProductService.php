<?php


namespace App\Product\Service;


use App\Product\Entity\ProductEntity;
use App\Product\Model\ProductRequest;
use App\Product\Model\ProductResponse;
use App\Product\Repository\ProductRepository;

class ProductService {

    /**
     * @var ProductRepository
     */
    private $productRepository;

    /**
     * ProductService constructor.
     */
    public function __construct() {
        $this->productRepository = new ProductRepository();
    }

    /**
     * @param ProductRequest $model
     * @return ProductResponse | bool
     * @throws \ReflectionException
     */
    public function addProduct(ProductRequest $model) {

        $productEntity = new ProductEntity();

        $productEntity->setProductname($model->getProductname());

        return $this->convertProductEntityToProductResponse($this->productRepository->save($productEntity));
    }

    /**
     * @param $id
     * @return ProductResponse
     */
    public function getProduct($id) {

        return $this->convertProductEntityToProductResponse($this->productRepository->getById($id));

    }

    public function getProducts(){
        return $this->productRepository->getProducts();
    }


    /**
     * @param ProductEntity $productEntity
     * @return ProductResponse | bool
     */
    private function convertProductEntityToProductResponse($productEntity) {
        if (empty($productEntity)) {
            return false;
        }

        $productResponse = new ProductResponse();

        $productResponse
            ->setId($productEntity->getId())
            ->setProductname($productEntity->getProductname())
            ->setDescription($productEntity->getDescription())
            ->setPrice($productEntity->getPrice())
            ->setHarvestdate($productEntity->getHarvestdate())
            ->setPhoto($productEntity->getPhoto())
            ->setIdPlot($productEntity->getIdPlot())
            ->setIdType($productEntity->getIdType());


        return $productResponse;
   }
}