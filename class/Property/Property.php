<?php
class Property {

    public $name;

    use Address;

    public function __construct($nameP) {
        $this->name = $nameP;
    }

}

$property_1 = new Property('Villa Balbianello');
var_dump($property_1);

?>