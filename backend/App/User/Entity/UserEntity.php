<?php namespace App\User\Entity;


use App\Database\Entity\Entity;

class UserEntity extends Entity {

    private $id;
    private $name;
    private $lname;
    private $phone;
    private $email;
    private $password_hash;
    private $stallname;
    private $deliveryrange;
    private $id_product;
    private $id_address;
    private $id_plot;
    private $id_order;
    private $id_cart;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return ProductEntity
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     * @return ProductEntity
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLname()
    {
        return $this->lname;
    }

    /**
     * @param mixed $lname
     * @return ProductEntity
     */
    public function setLname($lname)
    {
        $this->lname = $lname;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $phone
     * @return ProductEntity
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     * @return ProductEntity
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPasswordHash()
    {
        return $this->password_hash;
    }

    /**
     * @param mixed $password_hash
     * @return ProductEntity
     */
    public function setPasswordHash($password_hash)
    {
        $this->password_hash = $password_hash;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStallname()
    {
        return $this->stallname;
    }

    /**
     * @param mixed $stallname
     * @return ProductEntity
     */
    public function setStallname($stallname)
    {
        $this->stallname = $stallname;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDeliveryrange()
    {
        return $this->deliveryrange;
    }

    /**
     * @param mixed $deliveryrange
     * @return ProductEntity
     */
    public function setDeliveryrange($deliveryrange)
    {
        $this->deliveryrange = $deliveryrange;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdProduct()
    {
        return $this->id_product;
    }

    /**
     * @param mixed $id_product
     * @return ProductEntity
     */
    public function setIdProduct($id_product)
    {
        $this->id_product = $id_product;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdAddress()
    {
        return $this->id_address;
    }

    /**
     * @param mixed $id_address
     * @return ProductEntity
     */
    public function setIdAddress($id_address)
    {
        $this->id_address = $id_address;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdPlot()
    {
        return $this->id_plot;
    }

    /**
     * @param mixed $id_plot
     * @return ProductEntity
     */
    public function setIdPlot($id_plot)
    {
        $this->id_plot = $id_plot;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdOrder()
    {
        return $this->id_order;
    }

    /**
     * @param mixed $id_order
     * @return ProductEntity
     */
    public function setIdOrder($id_order)
    {
        $this->id_order = $id_order;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdCart()
    {
        return $this->id_cart;
    }

    /**
     * @param mixed $id_cart
     * @return ProductEntity
     */
    public function setIdCart($id_cart)
    {
        $this->id_cart = $id_cart;
        return $this;
    }

}