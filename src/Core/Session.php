<?php


namespace AYakovlev\Core;


class Session
{
    public static function addToSession($items): bool
    {
        $_SESSION['items'] = json_encode($items);

        if (isset($_SESSION['items'])) {
            return true;
        } else {
            return false;
        }
    }

    public static function getFromSession(): array
    {
        return json_decode($_SESSION['items']);
    }
}