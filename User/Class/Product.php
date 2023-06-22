<?php

declare(strict_types=1);


class Product
{

    /** @var int */
    public int $id;

    /** @var varchar */
    public varchar $name;

    /** @var string */
    public string $role;

    /** @var varchar */
    public varchar $photo;

    public  $Attribute5;

    public  $Attribute6;

    /** @var int */
    public int $type_id;

    /** @var int */
    public int $theme_id;

    /** @var int */
    public int $brand_id;

    /** @var int */
    public int $gender_id;

    /** @var double */
    public double $price;

    /** @var int */
    public int $count;

    /** @var text */
    public text $shord_description;

    /** @var text */
    public text $description;

    /** @var int */
    public int $visible;

    /**
     * Default constructor
     */
    public function __construct()
    {
        // ...
    }

    /**
     * 
     */
    public function addProduct()
    {
        // TODO implement here
    }

    /**
     * 
     */
    public function createUser()
    {
        // TODO implement here
    }

    /**
     * 
     */
    public function editProduct()
    {
        // TODO implement here
    }

    /**
     * 
     */
    public function getProductById()
    {
        // TODO implement here
    }

    /**
     * 
     */
    public function deleteProduct()
    {
        // TODO implement here
    }

}
