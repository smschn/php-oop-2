<?php

require_once __DIR__ . '/User.php';

class EstateAgent extends User {
    public $employee_id;
    public $employee_wage;
    public $employee_level;

    public function __construct($nameP, $lastnameP, $emailP, $ageP = null, $employee_idP, $employee_wage = 0) {
        parent::__construct($nameP, $lastnameP, $emailP, $ageP);
        $this->employee_id = $employee_idP;
    }

    public function getEmployeeNameLastname() {
        return 'Nome: ' . $this->name . ' - Cognome: ' . $this->lastname;
    }

    public function setDiscount($ageP) {
        if ($ageP >= 60 && is_int($ageP)) {
            $this->discount = 35;
        }
    }

}

$employee_1 = new EstateAgent('Veronica', 'Rossi', 'veronica@rossi.com', 60, 1234);
var_dump($employee_1);