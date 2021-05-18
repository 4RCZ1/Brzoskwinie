<?php


namespace App\Product\Controller;

use App\Router\RestBodyReader;
use App\Serializer\JsonSerializer;
use App\Product\Model\ProductRequest;
use App\Product\Service\ProductService;

/**
 * @Controller(path="/product")
 */
class ProductController {
    /**
     * @var ProductService
     */

    private $productService;

    /**
     * ProductController constructor.
     */
    public function __construct() {
        $this->productService = new ProductService();
    }


    /**
     * @Action(method="GET")
     */
    public function getProducts() {
        $serializer = JsonSerializer::getInstance();
        $serializedEntity = $serializer->serialize($this->productService->getProducts(), "json");
        echo $serializedEntity;
    }

    /**
     * @Action(method="POST")
     */
    public function addProduct() {
        /** @var ProductRequest $requestBody */
        $requestBody = RestBodyReader::readBody(ProductRequest::class);

        $product = $this->productService->addProduct($requestBody);

        echo JsonSerializer::getInstance()->serialize($product, 'json');
    }

    /**
     * @Action(method="GET", path="/{id}")
     */
    public function getProduct($id) {
        $user = $this->productService->getProduct($id);
        echo JsonSerializer::getInstance()->serialize($user, 'json');
    }

    /**
     * @Action(method="PUT", path="/{id}")
     */
    public function updateProduct($id) {
        echo sprintf("Updated product with id: %s", array($id));
    }

    /**
     * @Action(method="DELETE", path="/{id}")
     */
    public function deleteProduct($id) {
        echo sprintf("Deleted product with id: %s", array($id));
    }
}