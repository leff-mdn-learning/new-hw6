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
        $product = new Product(
            'Xiaomi Mi max 2',
            200,
            'phone',
            'it`s black',
            5
        );
        $customer = new Customer('Phil Wain');
        $cart = new Cart($customer);
        $cart->addProduct($product);

        View::render('addProduct', $cart->getItems());
    }

}