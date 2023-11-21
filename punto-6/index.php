<?php
//DATOS DE ENTRADA
$name = "";
$age = 0;

//PROCESO
echo "Digite su nombre: ";
$name = readline();

echo "Digite su edad: ";
$age = readline();

if ($age >= 18) {
echo "Hola " . $name . " usted es mayor de edad ";
} else {
echo "hola " . $name. "eres menor de edad";
}
?>