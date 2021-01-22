<?php


namespace AYakovlev\Model;


class Customer
{
    protected string $name;
    protected string $email;

    public function __construct($name, $email = '')
    {
        $this->name = $name;
    }
}
