<?php

spl_autoload_register(
    function ($class) {
        require_once "classes/" . $class . ".php";
    }
);

function component($class, $data)
{
    return new $class($data);
}
