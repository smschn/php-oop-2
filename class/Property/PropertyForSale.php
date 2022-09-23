<?php

class PropertyForSale extends Property {
    
    protected $sale_price;

    public function __construct($nameP, $salePriceP) {
        parent::__construct($nameP);
        $this->sale_price = $salePriceP;
    }

    public function getPropertyForSaleInfo() {
        return 'Nome immobile: ' . $this->name . ' <br> Prezzo immobile: € ' . $this->sale_price; // recupera gli attributi dalla classe padre.
    }
}

$property_2_sale = new PropertyForSale('Attico #789', 1000000);
$property_2_sale->property_type = 'Attic'; // l'attributo è PUBLIC: si può accedere direttamente dall'oggetto.
$property_2_sale->size = '200mq'; // come riga 18.
$property_2_sale->setPropertyId(999); // l'attributo 'property_id' è PROTECTED: non è accessibile direttamente dall'oggetto; si devono usare set() o get().

?>