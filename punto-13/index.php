<?php
//DATOS DE ENTRADA
$numberArray = array();
$sum = 0;
for ($i = 0; $i < 5; $i++) {
echo "Escriba un numero para sumar: " . "\n";
$numberArray[] = readline();
}

//PROCESO
foreach ($numberArray as $number) {
$sum = $sum + $number;
}

echo "La suma total del arreglo es: " . $sum;
?>