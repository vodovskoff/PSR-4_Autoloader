<?php

spl_autoload_register(function ($className) {
    $path = dirname(__DIR__) . "/src/" . str_replace("\\", "/", $className) . ".php";
    include_once $path;
});

$cOne = new ClassOne();
$cTwo = new subsrc\ClassTwo();

$cOne->shout();
$cTwo->shout();

?>