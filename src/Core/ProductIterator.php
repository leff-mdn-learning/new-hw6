<?php


namespace AYakovlev\Core;


use AYakovlev\Model\Product;

class ProductIterator implements \Iterator
{
    protected array $product;
    protected int $position;
    protected bool $reverse;

    public function __construct($product, $reverse = false)
    {
        $this->product = $product;
        $this->reverse = $reverse;
    }

    /**
     * @inheritDoc
     */
    public function current()
    {
        return $this->product->getItems()[$this->position];
    }

    /**
     * @inheritDoc
     */
    public function next()
    {
        // TODO: Implement next() method.
    }

    /**
     * @inheritDoc
     */
    public function key()
    {
        // TODO: Implement key() method.
    }

    /**
     * @inheritDoc
     */
    public function valid()
    {
        // TODO: Implement valid() method.
    }

    /**
     * @inheritDoc
     */
    public function rewind()
    {
        // TODO: Implement rewind() method.
    }
}