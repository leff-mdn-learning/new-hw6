<?php


namespace AYakovlev\Model;


use Exception;
use Traversable;

class Product implements \IteratorAggregate
{
    protected string $title;
    protected string $price;
    protected string $category;
    protected string $description;
    protected int $quantity;

    public function getIterator()
    {
        // TODO: Implement getIterator() method.
    }
}