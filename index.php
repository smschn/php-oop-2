<?php

require_once __DIR__ . '/class/User/Customer.php';
require_once __DIR__ . '/class/User/EstateAgent.php';
require_once __DIR__ . '/class/Property/Property.php';

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
    <h1>EstateAgent:</h1>
    <ul>
        <li>
            <?php echo $employee_1->getUserNameLastname(); ?>
        </li>
        <li>
            <?php
            $employee_1->setDiscount(60);
            echo 'Sconto employee_1: ' . $employee_1->getDiscount() . ' %.'; ?>
        </li>
    </ul>

</body>
</html>