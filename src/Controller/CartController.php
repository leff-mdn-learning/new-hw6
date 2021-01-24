<?php


namespace AYakovlev\Controller;


use AYakovlev\Core\Session;
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

        $product[] = new Product(
            'Xiaomi Mi max 2',
            200,
            'phone',
            'it`s black',
            5
        );

        $product[] = new Product(
            'Honor 10',
            500,
            'phone',
            'it`s blue',
            1
        );
        $cart = new Cart($product,$customer, $date, $time);

        $cart->addProduct($product);

        if (Session::addToSession($cart)) {
            View::render('addProduct', $cart->getItems());
        } else {
            View::render('500', ['Error session'],500);
        }
    }

}