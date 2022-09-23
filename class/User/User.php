<?php

require_once __DIR__ . '/../traits/Address.php';
class User {

    public $name;
    public $lastname;
    public $email;
    public $age;
    protected $discount;

    use Address;

    public function __construct($nameP, $lastnameP, $emailP, $ageP = null) {
        $this->name = $nameP;
        $this->lastname = $lastnameP;
        $this->email = $emailP;
        $this->age = $ageP;
    }

    public function getUserNameLastname() {
        return 'Nome: ' . $this->name . ' --- Cognome: ' . $this->lastname;
    }

    public function setDiscount($ageP) {
        if ($ageP >= 60 && is_int($ageP)) {
            $this->discount = 10;
        }
    }

    public function getDiscount() {
        return $this->discount;
    }
}