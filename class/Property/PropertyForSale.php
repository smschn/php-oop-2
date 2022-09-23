<?php
class PropertyForSale extends Property {
    
    protected $sale_price;

    public function __construct($nameP, $salePriceP) {
        parent::__construct($nameP);
        $this->sale_price = $salePriceP;
    }

}

$property_3_sale = new PropertyForSale('Attico #789', 1000000);
var_dump($property_3_sale);

?>