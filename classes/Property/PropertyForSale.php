<?php

require_once __DIR__ . '/Property.php';

class PropertyForSale extends Property {
    
    protected $sale_price;

    public function __construct($nameP, $property_type_p, $salePriceP) {
        parent::__construct($nameP, $property_type_p);
        $this->sale_price = $salePriceP;
    }

    public function getPropertyForSaleInfo() {
        return 'Nome immobile: ' . $this->name . '<br> Tipologia immobile: ' . $this->property_type . ' <br> Prezzo immobile: € ' . $this->sale_price; // recupera gli attributi dalla classe padre.
    }
}

$property_2_sale = new PropertyForSale('Appartamento #789', 'Attico', 1000000);
$property_2_sale->size = '200mq'; // l'attributo è PUBLIC: si può accedere direttamente dall'oggetto.
$property_2_sale->setPropertyId(999); // l'attributo 'property_id' è PROTECTED: non è accessibile direttamente dall'oggetto; si devono usare set() o get().

?>