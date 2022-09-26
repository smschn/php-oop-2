<?php

require_once __DIR__ . '/classes/User/Customer.php';
require_once __DIR__ . '/classes/User/EstateAgent.php';
require_once __DIR__ . '/classes/Property/PropertyForRent.php';
require_once __DIR__ . '/classes/Property/PropertyForSale.php';

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
    <ol>
        <li>
            <?php
                echo $customer_1->getUserFullname() . '<br>';

                // test EXCEPTION: setDiscount NON funziona => EXCEPTION mostra un messaggio d'errore.
                try {
                    $customer_1->setDiscount('provare la exception');
                } catch (Exception $e) {
                    echo $e->getMessage();
                }
            ?>
        </li>
        <br>
        <li>
            <?php
                echo $customer_2->getUserFullname() . '<br>';

                // test EXCEPTION: setDiscount() funziona.
                try {
                    $customer_2->setDiscount(70);
                } catch (Exception $e) {
                    echo $e->getMessage();
                };

                echo 'Sconto di ' . $customer_2->name . ' ' . $customer_2->lastname . ': ' . $customer_2->getDiscount() . ' %.';
            ?>
        </li>
    </ol>

    <!-- EstateAgents -->
    <h1>EstateAgents:</h1>
    <ol>
        <li>
            <?php
                echo $estateAgent_1->getUserFullname() . '<br>';
                
                // test EXCEPTION: setDiscount() funziona.
                try {
                    $estateAgent_1->setDiscount(70);
                } catch (Exception $e) {
                    echo $e->getMessage();
                };

                echo 'Sconto di ' . $estateAgent_1->name . ' ' . $estateAgent_1->lastname . ': '. $estateAgent_1->getDiscount() . ' %. <br>';

                $estateAgent_1->setAddress('Bellagio', 22021, 'Como'); // questi 3 attributi sono PROTECTED: si accede ad essi solo con una set() e una get().
                echo $estateAgent_1->getAddress() . '<br>'; // leggere riga sopra.
                echo $estateAgent_1->getWage(); // leggere riga sopra.
            ?>
        </li>
    </ol>

    <!-- Properties -->
    <h1>Properties:</h1>
    <ol>
        <li>
            <?php
                echo 'Nome immobile: ' . $property_1_rent->name . ' <br> Tipologia immobile: ' . $property_1_rent->property_type . '<br> Affitto mensile: ' . $property_1_rent->getRentalPrice();
            ?>
        </li>
        <br>
        <li>
            <?php
                echo $property_2_sale->getPropertyForSaleInfo();
            ?>
        </li>
    </ol>

</body>
</html>