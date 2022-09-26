<?php

require_once __DIR__ . '/User.php';

class EstateAgent extends User {

    protected $employee_id; // PROTECTED = accessibili all'interno di questa classe e all'interno di classi figlie. Non accessibili dagli oggetti (se non tramite set() e get()).
    private $employee_wage; // PRIVATE = accessibili solo all'interno di questa classe; non accessibili da classi padri nè da classi figlie. Non accessibili dagli oggetti (se non tramite set() e get()).
    private $employee_level;

    public function __construct($nameP, $lastnameP, $emailP, $ageP = null, $employee_idP, $employee_wageP = 0) {
        parent::__construct($nameP, $lastnameP, $emailP, $ageP);
        $this->employee_id = $employee_idP;
        $this->employee_wage = $employee_wageP;
    }

    public function setDiscount($ageP) {
        if (!is_int($ageP)) {
            throw new Exception('Errore inserimento età: inserire un numero intero per calcolare lo sconto.');
            $this->discount = null;
        } else if ($ageP >= 60) {
            $this->discount = 35;
        }
    }

    public function setWage($wageP) {
        $this->employee_wage = $wageP;
    }

    public function getWage() {
        return "Lo stipendio dell'agente con ID: " . $this->employee_id . ' è di €: ' . $this->employee_wage;
    }

}

$estateAgent_1 = new EstateAgent('Veronica', 'Rossi', 'veronica@rossi.com', 60, 8181);
$estateAgent_1->setDiscount(60); // 'discount' è PROTECTED: si accede ad esso solo tramite una set() o una get().
$estateAgent_1->setWage(2000); // 'employee_wage' è PRIVATE: si accede ad esso solo tramite una set() o una get().

?>