<?php


namespace AYakovlev\Model;


use Exception;
use Traversable;

class Product
{
    protected string $title;
    protected int $price;
    protected string $category;
    protected string $description;
    protected int $quantity;

    public function __construct($title, $price, $category, $description, $quantity)
    {
        $this->title = $title;
        $this->price = $price;
        $this->category = $category;
        $this->description = $description;
        $this->quantity = $quantity;
    }
}