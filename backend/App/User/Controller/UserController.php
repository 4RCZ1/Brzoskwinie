<?php


namespace App\User\Controller;

use App\Router\RestBodyReader;
use App\Serializer\JsonSerializer;
use App\User\Model\PlotRequest;
use App\User\Service\UserService;

/**
 * @Controller(path="/user")
 */
class UserController {
    /**
     * @var UserService
     */

    private $userService;

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
        $serializer = JsonSerializer::getInstance();
        $serializedEntity = $serializer->serialize($this->userService->getUsers(), "json");
        echo $serializedEntity;
    }

    /**
     * @Action(method="POST")
     */
    public function addUser() {
        /** @var PlotRequest $requestBody */
        $requestBody = RestBodyReader::readBody(PlotRequest::class);

        $user = $this->userService->addUser($requestBody);

        echo JsonSerializer::getInstance()->serialize($user, 'json');
    }

    /**
     * @Action(method="GET", path="/{id}")
     */
    public function getUser($id) {
        $user = $this->userService->getUser($id);
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