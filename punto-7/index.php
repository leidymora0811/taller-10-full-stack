<?php
//DATOS DE ENTRADA
$numberOne = 0;
$numberTwo = 0;
$option = "";
$result = 0;
//PROCESO
echo "Elija la opción para realizar la operación siendo \n";
echo "+ -> SUMAR \n";
echo "- -> RESTAR \n";
echo "* -> MULTIPLICAR \n";
echo "/ -> DIVIDIR \n";

$option = readline();
echo "Digite el primer numero a operar: ";
$numberOne = readline();

echo "Digite el segundo numero a operar: ";
$numberTwo = readline();

switch($option){
case "+":
    $result = $numberOne + $numberTwo;
break;
case "-":
    $result = $numberOne - $numberTwo;
    break;
case "-":
      $result = $numberOne * $numberTwo;
    break;
case "*":
    $result = $numberOne / $numberTwo;
    break;
case "/":
    break;
default:
echo "La opción digitada no es válida";  
}
echo " el resultado de la operacion es: " . $result; 
?>