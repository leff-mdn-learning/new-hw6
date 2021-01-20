<?php


namespace AYakovlev\Controller;

use AYakovlev\Core\View;

class DefaultController
{
    public function index()
    {
        View::render('about');
    }
}