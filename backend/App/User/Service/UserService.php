<?php


namespace App\User\Service;


use App\User\Entity\ProductEntity;
use App\User\Model\ProductRequest;
use App\User\Model\ProductResponse;
use App\User\Repository\ProductRepository;

class UserService {

    /**
     * @var ProductRepository
     */
    private $userRepository;

    /**
     * UserService constructor.
     */
    public function __construct() {
        $this->userRepository = new ProductRepository();
    }

    /**
     * @param ProductRequest $model
     * @return ProductResponse | bool
     * @throws \ReflectionException
     */
    public function addUser(ProductRequest $model) {

        $userEntity = new ProductEntity();

        $userEntity->setUsername($model->getName())
            ->setPasswordHash(sha1($model->getPasswordHash()));

        return $this->convertUserEntityToUserResponse($this->userRepository->save($userEntity));
    }

    /**
     * @param $id
     * @return ProductResponse
     */
    public function getUser($id) {

        return $this->convertUserEntityToUserResponse($this->userRepository->getById($id));
    }

    public function getUsers(){
        return $this->userRepository->getUsers();
    }

    public function isUserWithPasswordExists($email, $password) {
        return $this->userRepository->isUserWithPasswordExists($email, $password);
    }

    /**
     * @param ProductEntity $userEntity
     * @return ProductResponse | bool
     */
    private function convertUserEntityToUserResponse($userEntity) {
        if (empty($userEntity)) {
            return false;
        }

        $userResponse = new ProductResponse();

        $userResponse
            ->setId($userEntity->getId())
            ->setName($userEntity->getName())
            ->setLname($userEntity->getLname())
            ->setPhone($userEntity->getPhone())
            ->setEmail($userEntity->getEmail())
            ->setStallname($userEntity->getStallname())
            ->setDeliveryrange($userEntity->getDeliveryrange())
            ->setIdProduct($userEntity->getIdProduct())
            ->setIdAddress($userEntity->getIdAddress())
            ->setIdPlot($userEntity->getIdPlot())
            ->setIdOrder($userEntity->getIdOrder())
            ->setIdCart($userEntity->getIdCart());


        return $userResponse;
    }
}