<?php
class EstateAgent extends User {

    public $employee_id;
    public $employee_wage;
    public $employee_level;

    public function __construct($nameP, $lastnameP, $emailP, $ageP = null, $employee_idP, $employee_wage = 0) {
        parent::__construct($nameP, $lastnameP, $emailP, $ageP);
        $this->employee_id = $employee_idP;
    }

    public function setDiscount($ageP) {
        if (!is_int($ageP)) {
            throw new Exception('Errore inserimento età: inserire un numero intero per calcolare lo sconto.');
            $this->discount = null;
        } else if ($ageP >= 60) {
            $this->discount = 35;
        }
    }

}

$employee_1 = new EstateAgent('Veronica', 'Rossi', 'veronica@rossi.com', 60, 1234);
$employee_1->setDiscount(60); // 'discount' è PROTECTED: si accede ad esso solo tramite una set() o una get().

?>