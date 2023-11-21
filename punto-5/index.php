<?php
//DECLARACION DE DATOS DE ENTRADA
const TICKET_PRICE = 25000;
$membershipType = "";
$personNumber = 0;

//PROCESO
echo "Digite el numero de personas que entraran a la bolera: \n";
$personNumber = readline();

echo "Digite el tipo de afiliación: \n";
$membershipType = readline();

$totalPay = $personNumber * TICKET_PRICE;

if (strtoupper($membershipType) == "A" || strtoupper($membershipType) == "B") {
    $totalPay = $totalPay * 0.7;
}

    echo "El total a pagar es $ " . number_format($totalPay);
?>