<?php


namespace AYakovlev\Controller;


use AYakovlev\Core\Session;
use AYakovlev\Core\View;
use AYakovlev\Model\Cart;
use AYakovlev\Model\Order;

class OrderController
{
    private Order $order;

    public function checkout()
    {
        if (isset($_SESSION['items'])) {
            $carts = Session::getFromSession();
            var_dump($carts);
            foreach ($carts['items'] as $product) {
                $this->order->setItems($product->getItems());
                $this->order->setCustomer($product->getCustomer());
                $this->order->setDate(date('Y-m-d', time()));
                $this->order->setTime(date('H:i:s', time()));
                $this->order->setDelivery($product->getDelivery());
                $this->order->setDiscount($product->getDiscount());
            }
            $this->order->setPosition(0);
            View::render('checkout', ['Product add to Order']);
        } else {
            View::render('checkout', ['Product not add to your Cart']);
        }

   }
}