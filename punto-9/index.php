<?php
echo "Tabla de multiplicar \n";

//DATOS DE ENTRADA
$number = 0;
$i = 0;
//PROCESO
echo "Digite el numero a multiplicar: \n";
$number = readline();

while($i <= 30){
  $result = $number * $i;
echo $number . " X " . $i . " = " . $result . "\n";
$i++;
}
?>