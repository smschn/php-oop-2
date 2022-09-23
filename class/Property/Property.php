<?php

require_once __DIR__ . '/../traits/Address.php';

class Property {
    public $name;

    use Address;
}

$test3 = new Property();
var_dump($test3);