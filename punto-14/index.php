<?php

function hasSecurityLong($pass) {
    return strlen($pass) >=8;
}

function hasUpperLetter($pass) {
$arrayPass = str_split($pass);

foreach($arrayPass as $letter) {
if($letter == strtoupper($letter)) {
return true;

}
    
}
return false; 
}

function hasNumber($pass) {
$arrayPass = str_split($pass);

foreach($arrayPass as $letter) {
if(is_numeric($letter)) {
return true;

}

}
return false; 
}


$user = "";
$password = "";


echo "Digite su usuario a registrar \n";
$user = readline();

echo "Digite su contraseña a registrar \n";
$password = readline();

if (hasSecurityLong($password)) {
if (hasUpperLetter($password)) {
    if (hasNumber($password)) {
echo "Felicitaciones su contraseña es segura y quedo registrada \n";
} else {
echo "Su contraseña no cumple con números \n";
}
} else {
echo "Su contraseña no cumple con letras mayusculas \n";
}
} else {
echo "Su contraseña no cumple con la longitud segura \n";
}
?>