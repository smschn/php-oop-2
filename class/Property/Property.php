<?php
class Property {

    public $name;
    public $property_type;
    public $size;

    use Address;

    public function __construct($nameP) {
        $this->name = $nameP;
    }

}

?>