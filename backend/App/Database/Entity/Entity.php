<?php


namespace App\Database\Entity;


use App\Helpers\ReflectionUtils;

abstract class Entity extends \App\Product\Entity\ProductEntity
{

    public abstract function getId();
}