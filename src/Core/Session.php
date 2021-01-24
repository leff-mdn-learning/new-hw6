<?php


namespace AYakovlev\Core;


class Session
{
    public static function addToSession(mixed $items): bool
    {
        $jsonCrt = [];
        foreach ($items as $item) {
            var_dump($item);
            $jsonCrt[] = json_encode($item);
        }
        var_dump(json_encode($jsonCrt));
//        $_SESSION['items'] = json_encode($items);
//
//        if (isset($_SESSION['items'])) {
//            return true;
//        } else {
//            return false;
//        }
    }

    public static function getFromSession(): mixed
    {
        return json_decode($_SESSION['items']);
    }
}