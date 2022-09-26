<?php

require_once __DIR__ . '/User.php';

class Customer extends User {

    public $phone;

    public function __construct($nameP, $lastnameP, $emailP, $ageP = null, $phoneP = null) {
        parent::__construct($nameP, $lastnameP, $emailP, $ageP);
        $this->phone = $phoneP;
    }

}

$customer_1 = new Customer('Marco', 'Rossi', 'marco@rossi.com');
$customer_1->phone = 8887766555; // si può accedere a phone perché è PUBLIC.

$customer_2 = new Customer('Marco', 'Bianchi', 'marco@bianchi.com', 70, 3319080700);

?>