<?php


namespace AYakovlev\Model;


class ShoppingCart
{
    protected Customer $customer;
    protected string $date;
    protected string $time;
    protected Delivery $delivery;
    protected Product $product;
    protected Discount $discountId;
}