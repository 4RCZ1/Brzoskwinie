<?php


namespace App\Product\Controller;

use App\Router\RestBodyReader;
use App\Serializer\JsonSerializer;
use App\Product\Model\ProductRequest;
use App\Product\Service\UserService;

/**
 * @Controller(path="/user")
 */
class ProductController {
    /**
     * @var ProductService
     */

    private $productService;

    /**
     * UserController constructor.
     */
    public function __construct() {
        $this->userService = new UserService();
    }


    /**
     * @Action(method="GET")
     */
    public function getUsers() {
        echo "kurwaJebana";
        $serializer = JsonSerializer::getInstance();
        $serializedEntity = $serializer->serialize($this->userService->getUsers(), "json");
        echo $serializedEntity;
    }

    /**
     * @Action(method="POST")
     */
    public function addUser() {
        /** @var ProductRequest $requestBody */
        $requestBody = RestBodyReader::readBody(ProductRequest::class);

        $user = $this->userService->addUser($requestBody);

        echo JsonSerializer::getInstance()->serialize($user, 'json');
    }

    /**
     * @Action(method="GET", path="/{id}")
     */
    public function getUser($id) {
        $user = $this->userService->getUser($id);
        echo "kurwa";
        echo JsonSerializer::getInstance()->serialize($user, 'json');
    }

    /**
     * @Action(method="PUT", path="/{id}")
     */
    public function updateUser($id) {
        echo sprintf("Updated user with id: %s", array($id));
    }

    /**
     * @Action(method="DELETE", path="/{id}")
     */
    public function deleteUser($id) {
        echo sprintf("Deleted user with id: %s", array($id));
    }
}