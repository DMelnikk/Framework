<?php



if(PHP_MAJOR_VERSION < 8) {
    die("Sorry this is only for 8+ PHP VERSIONS, YOUR VERSION IS . " . PHP_MAJOR_VERSION);
}

require_once __DIR__ . '/../config/init.php';
require_once ROOT . '/vendor/autoload.php';

$app = new \PHPFramework\Application();




