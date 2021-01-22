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
        $date,
        $time,
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

    /**
     * @return int
     */
    public function getPosition(): int
    {
        return $this->position;
    }

    /**
     * @return Customer
     */
    public function getCustomer(): Customer
    {
        return $this->customer;
    }

    /**
     * @return string
     */
    public function getDate(): string
    {
        return $this->date;
    }

    /**
     * @return string
     */
    public function getTime(): string
    {
        return $this->time;
    }

    /**
     * @return Delivery
     */
    public function getDelivery(): Delivery
    {
        return $this->delivery;
    }

    /**
     * @return Discount
     */
    public function getDiscount(): Discount
    {
        return $this->discount;
    }


}