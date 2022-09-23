<?php

class PropertyForRent extends Property {

    protected $rental_price;

    public function __construct($nameP, $rentalPriceP) {
        parent::__construct($nameP);
        $this->rental_price = $rentalPriceP;
    }

    public function getRentalPrice() {
        return $this->rental_price;
    }

}

$property_2_rent = new PropertyForRent('Monolocale #123', 500);
$property_2_rent->setAddress('San Giuliano Milanese', 20098, 'Milano'); // essendo PROTECTED accedo agli attributi solo attraverso un set() o un get().
$property_2_rent->street = 'Via Tante Belle Cose'; // essendo l'attributo PUBLIC (nel TRAIT address), posso accedere direttamente dall'oggetto.
var_dump($property_2_rent);