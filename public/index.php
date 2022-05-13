<?php

spl_autoload_register(function ($className) {
    include_once __DIR__ . "/../src/" . str_replace("\\", "/", $className) . ".php";
});

$cOne = new ClassOne();
$cTwo = new subsrc\ClassTwo();

$cOne->shout();
$cTwo->shout();

?>
