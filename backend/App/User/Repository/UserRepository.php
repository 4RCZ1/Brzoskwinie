<?php namespace App\User\Repository;


use App\Database\Connector;
use App\Database\Repository\Repository;
use App\User\Entity\UserEntity;
use PDO;

class UserRepository extends Repository {

    /**
     * UserRepository constructor.
     */
    public function __construct() {
        parent::__construct();
    }

    public function getEntityName() {
        return "App\User\Entity\UserEntity";
    }

    protected function getTableName() {
        return "profile";
    }

    public function getUsers(){
        $query = $this->prepare("Select * from " . $this->getTableName());

        $query->execute();

        return $query->fetchAll();
    }


    public function isUserWithPasswordExists($email, $password) {
        $query = $this->prepare("Select * from " . $this->getTableName() . " where email=:email and password_hash=:password_hash");

        $query->execute(array(
            ":email" => $email,
            ":password_hash" => sha1($password)
        ));

        return $query->rowCount() > 0;
    }
}