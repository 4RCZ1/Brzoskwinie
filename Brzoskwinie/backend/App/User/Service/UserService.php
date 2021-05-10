<?php


namespace App\User\Service;


use App\User\Entity\UserEntity;
use App\User\Model\UserRequest;
use App\User\Model\UserResponse;
use App\User\Repository\UserRepository;

class UserService {

    /**
     * @var UserRepository
     */
    private $userRepository;

    /**
     * UserService constructor.
     */
    public function __construct() {
        $this->userRepository = new UserRepository();
    }

    /**
     * @param UserRequest $model
     * @return UserResponse | bool
     * @throws \ReflectionException
     */
    public function addUser(UserRequest $model) {

        $userEntity = new UserEntity();

        $userEntity->setUsername($model->getName())
            ->setPasswordHash(sha1($model->getPasswordHash()));

        return $this->convertUserEntityToUserResponse($this->userRepository->save($userEntity));
    }

    /**
     * @param $id
     * @return UserResponse
     */
    public function getUser($id) {

        return $this->convertUserEntityToUserResponse($this->userRepository->getById($id));
    }

    public function getUsers(){

        var_dump($this->userRepository->getUsers());
        die();
        return json_encode($this->userRepository->getUsers());
    }

    public function isUserWithPasswordExists($email, $password) {
        return $this->userRepository->isUserWithPasswordExists($email, $password);
    }

    /**
     * @param UserEntity $userEntity
     * @return UserResponse | bool
     */
    private function convertUserEntityToUserResponse($userEntity) {
        if (empty($userEntity)) {
            return false;
        }

        $userResponse = new UserResponse();

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