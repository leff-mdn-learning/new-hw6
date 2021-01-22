<?php


namespace AYakovlev\Model;


class Cart implements \Iterator
{
    protected array $items = [];
    private int $position;

    protected Customer $customer;
    protected string $date;
    protected string $time;
    protected Delivery $delivery;
    protected Discount $discount;

    public function __construct(
        $customer,
        $date = '2021-01-22',
        $time = '12:02',
        $delivery = 'FastD',
        $discount = '0'
    )
    {
        $this->position = 0;
    }

    public function current(): Product
    {
        return $this->items[$this->position];
    }

    public function next(): int
    {
        return ++$this->position;
    }

    public function key(): int
    {
        return $this->position;
    }

    public function valid(): bool
    {
        return isset($this->items[$this->position]);
    }

    public function rewind(): void
    {
        $this->position = 0;
    }

    public function addProduct(Product $product): void
    {
        $this->items[] = $product;
    }

    /**
     * @return array
     */
    public function getItems(): array
    {
        return $this->items;
    }
}