<?php
echo "numeros impares del 1 al 100: \n";
//DATOS DE ENTRADA
$sum = 0;

for($i = 1; $i <= 100; $i = $i + 2){
echo $i . "\n";
$sum = $sum + $i; 
}
echo "la suma de todos los numeros impares es: " . $sum;
?>