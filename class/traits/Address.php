<?php
trait Address {

    public $street;
    public $house_number;
    protected $city;
    protected $cap;
    protected $province;

    public function setAddress($cityP, $capP, $provinceP) {
        $this->city = $cityP;
        $this->cap = $capP;
        $this->province = $provinceP;
    }

    public function getAddress() {
        return 'Residenza: ' . $this->city . ' --- CAP: ' . $this->cap . ' --- Provincia: ' . $this->province;
    }

}

?>