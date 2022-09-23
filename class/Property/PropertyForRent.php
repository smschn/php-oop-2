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

$property_1_rent = new PropertyForRent('Monolocale #123', 500);
$property_1_rent->setAddress('San Giuliano Milanese', 20098, 'Milano'); // essendo questi 3 attributi PROTECTED, accedo ad essi solo attraverso un set() o un get().
$property_1_rent->street = 'Via Tante Belle Cose'; // essendo l'attributo PUBLIC (dentro il TRAIT address), posso accedervi direttamente dall'oggetto.

?>