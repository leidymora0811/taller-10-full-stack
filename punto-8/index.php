<?php
//DATOS DE ENTRADA
$membershipType = "";
$personNumber = 0;
const TICKET_PRICE = 25000;
//PROCESO
echo "Digite el tipo de membresia: ";
$membershipType = strtoupper(readline());
echo "Digite el número de personas: ";
$personNumber = readline();

$totalPay = $personNumber * TICKET_PRICE;

switch( $membershipType){
case "A":
    $totalPay = $totalPay * 0.7;
break;
case "B":
    $totalPay = $totalPay * 0.75;
break;
case "C":
    $totalPay = $totalPay * 0.9;
break;
case "D":
    $totalPay = $totalPay * 0.95;
break;
default:
echo "usted no cuenta con membresia para descuento \n";
}
echo "El total a pagar es de : " . $totalPay;
?>