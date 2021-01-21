<?php


namespace AYakovlev\Model;


class Cart
{
    protected Customer $customer;
    protected string $date;
    protected string $time;
    protected Delivery $delivery;
    protected int $quantity;
    protected Discount $discount;
}