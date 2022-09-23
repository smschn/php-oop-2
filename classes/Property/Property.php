<?php

class Property {

    public $name;
    public $property_type;
    public $size;
    protected $property_id;

    use Address;  // importo il TRAIT 'Address' (trovandosi in un altro file, bisogna importarne il codice tramite REQUIRE: qui non serve perché importo tutti in index.php).

    public function __construct($nameP) {
        $this->name = $nameP;
    }

    public function setPropertyId($idP) {
        $this->property_id = $idP;
    }

}

?>