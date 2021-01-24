<?php


namespace AYakovlev\Core;


class Session
{
    public static function addToSession(mixed $items): bool
    {
        $_SESSION['items'] = serialize($items);

        if (isset($_SESSION['items'])) {
            return true;
        } else {
            return false;
        }
    }

    public static function getFromSession(): mixed
    {
        return unserialize($_SESSION['items']);
    }
}