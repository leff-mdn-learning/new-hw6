<?php

require '../vendor/autoload.php';

use AYakovlev\Core\App;
use AYakovlev\Core\View;

try {
    $app = new App();
    $app->run();
} catch (Exception $e) {
    View::render('500', (array) $e->getMessage());
}
