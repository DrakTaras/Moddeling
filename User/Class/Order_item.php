<?php

declare(strict_types=1);


class Order_item
{

    /** @var int */
    public int $id;

    /** @var int */
    public int $order_id;

    /** @var int */
    public int $product_id;

    public  $Attribute3;

    /** @var int */
    public int $count;

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
    public function getPacket()
    {
        // TODO implement here
    }

    /**
     * 
     */
    public function createOrder_item()
    {
        // TODO implement here
    }

    /**
     * 
     */
    public function editOrder_item()
    {
        // TODO implement here
    }

    /**
     * 
     */
    public function deleteOrder_item()
    {
        // TODO implement here
    }

    /**
     * 
     */
    public function calculatePrice()
    {
        // TODO implement here
    }

}
