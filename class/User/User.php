<?php

require_once __DIR__ . '/../traits/Address.php';
class User {
    public $name;
    public $lastname;
    public $age;
    public $email;
    public $phone;

    use Address;
}