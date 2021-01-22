<?php


namespace AYakovlev\Controller;


use AYakovlev\Model\Cart;
use AYakovlev\Model\Order;

class OrderController
{
    private Order $order;

    public function checkout()
    {
        $this->order->setItems($cart->getItems());
        $this->order->setCustomer($cart->getCustomer());
        $this->order->setDate(date('Y-m-d', time()));
        $this->order->setTime(date('H:i:s', time()));
        $this->order->setDelivery($cart->getDelivery());
        $this->order->setDiscount($cart->getDiscount());
        $this->order->setPosition(0);
    }
}