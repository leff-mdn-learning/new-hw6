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

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return int
     */
    public function getPrice(): int
    {
        return $this->price;
    }

    /**
     * @return string
     */
    public function getCategory(): string
    {
        return $this->category;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }

    public function __construct($title, $price, $category, $description, $quantity)
    {
        $this->title = $title;
        $this->price = $price;
        $this->category = $category;
        $this->description = $description;
        $this->quantity = $quantity;
    }
}