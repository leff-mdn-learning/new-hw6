<?php


namespace AYakovlev\Controller;


use AYakovlev\Core\View;
use AYakovlev\Model\Cart;
use AYakovlev\Model\Customer;
use AYakovlev\Model\Product;

class CartController
{
    public function index(): void
    {
        View::render('cart');
    }

    public function add(Product $product, int $quantity, Customer $customer): Cart
    {

    }

}