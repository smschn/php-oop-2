<?php

require_once __DIR__ . '/class/User/Customer.php';
require_once __DIR__ . '/class/User/EstateAgent.php';
require_once __DIR__ . '/class/Property/Property.php';
require_once __DIR__ . '/class/Property/PropertyForRent.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 2</title>
</head>
<body>

    <!-- Customers -->
    <h1>Customers:</h1>
    <ul>
        <li>
            <?php echo $customer_1->getUserNameLastname(); ?>
        </li>
        <br>
        <li>
            <?php echo $customer_2->getUserNameLastname(); ?>
        </li>
        <li>
            <?php
            $customer_2->setDiscount(70);
            echo 'Sconto customer_2: ' . $customer_2->getDiscount() . ' %.';
            ?>
        </li>
    </ul>

    <!-- EstateAgents -->
    <h1>EstateAgents:</h1>
    <ul>
        <li>
            <?php echo $employee_1->getUserNameLastname(); ?>
        </li>
        <li>
            <?php
            $employee_1->setDiscount(60);
            echo 'Sconto ' . $employee_1->name . ' ' . $employee_1->lastname . ': '. $employee_1->getDiscount() . ' %.'; ?>
        </li>
        <li>
            <?php
            $employee_1->setAddress('Bellagio', 22021, 'Como');
            echo $employee_1->getAddress();
            ?>
        </li>
    </ul>

    <!-- Properties -->
    <h1>Properties:</h1>
    <ul>
        <li>
            <?php echo $property_1->name ?>
        </li>
        <li>
            <?php echo 'Nome immobile: ' . $property_2_rent->name . ' --- Affitto mensile: ' . $property_2_rent->getRentalPrice() ?>
        </li>
    </ul>

</body>
</html>