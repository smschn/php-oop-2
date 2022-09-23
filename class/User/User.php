<?php

require_once __DIR__ . '/../traits/Address.php';
class User {

    public $name;
    public $lastname;
    public $email;
    public $age;
    protected $discount;

    use Address; // importo il TRAIT 'Address' (essendo in un altro file devo importarne il codice tramite REQUIRE).

    public function __construct($nameP, $lastnameP, $emailP, $ageP = null) {
        $this->name = $nameP;
        $this->lastname = $lastnameP;
        $this->email = $emailP;
        $this->age = $ageP;
    }

    public function getUserFullname() {
        return 'Nome: ' . $this->name . ' <br> Cognome: ' . $this->lastname;
    }

    public function setDiscount($ageP) {
        if (!is_int($ageP)) {
            throw new Exception('Errore inserimento età: inserire un numero intero per calcolare lo sconto.');
            $this->discount = null;
        } else if ($ageP >= 60) {
            $this->discount = 10;
        }
    }

    public function getDiscount() {
        return $this->discount;
    }
}

?>