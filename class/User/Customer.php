<?php

require_once __DIR__ . '/User.php';

class Customer extends User {

}

$test1 = new Customer();
var_dump($test1);