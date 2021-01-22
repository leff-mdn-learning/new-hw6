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

    public function add(): void
    {
        $customer = new Customer('Phil Wain');

        $date = date('Y-m-d', time());
        $time = date('H:i:s', time());
        $cart = new Cart($customer, $date, $time);

        $product = new Product(
            'Xiaomi Mi max 2',
            200,
            'phone',
            'it`s black',
            5
        );
        $cart->addProduct($product);

        $product = new Product(
            'Honor 10',
            500,
            'phone',
            'it`s blue',
            1
        );
        $cart->addProduct($product);

        View::render('addProduct', $cart->getItems());
    }

}