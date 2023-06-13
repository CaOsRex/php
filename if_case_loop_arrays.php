<?php

/* 1.   IF CONDICIONAL */
/* $salario = 900000;
$No_Subsidio_Msg = "Usted (NO) tiene derecho a subsidio";
$Si_Subsidio_Msg = "Usted (SI) tiene derecho a subsidio";
if ($salario>= 5000000) {
    echo $No_Subsidio_Msg;
}
elseif ($salario>= 3000000) {
    echo $No_Subsidio_Msg;
}
elseif ($salario>= 1000000) {
    echo $Si_Subsidio_Msg;  
}
else {
    echo "Usted tiene derecho a un subsidio de vivienda";
} */

/* $temperatura = 15;
if ($temperatura < 0 || $temperatura > 30) {
    echo "El clima no es favorable";
}
else {
    echo "El clima es bueno";
} */

/* --------------------------------------------------------------- */

/* 2.   SWITCH*/
/*     $hora = "03:00 P.M";
    switch ($hora) {
        case '06:00 A.M':
            echo "Camper, tienes Software Skill";
            break;
        case '08:00 A.M':
            echo "Camper, tienes Break, Pausa activa";
            break;
        case '10:00 A.M':
            echo "Camper, tienes Break, Pausa activa";
            break;
        case '12:00 A.M':?>
                echo "Camper, tienes Break, Pausa activa";
                break;
        case '02:00 P.M':
                echo "Camper, tienes Break, Pausa activa";
                break;
        default:
            echo "Camper, Descansa";
            break;
    } */

/* --------------------------------------------------------------- */

/* 3.   WHILE - CICLO REPETITIVO (repite codigo mientras se cumpla una condicion) */
/* $constador = 0;

while ($constador < 10) {
    $constador++;
    echo $constador . "<br>";
} */

/* --------------------------------------------------------------- */

/* $comida = array("Panzerotti", "Sushi", "Sopa", "Pescado");

echo $comida[0] . "<br>";
echo $comida[1] . "<br>";
echo $comida[2] . "<br>";
echo $comida[3] . "<br>";

echo "<br>";

foreach ($comida as $bocado){
    echo $bocado . "<br>";
} */

/* --------------------------------------------------------------- */

$comida = array("Panzerotti", "Sushi", "Sopa", "Pescado");

echo $comida[0] . "<br>";
echo $comida[1] . "<br>";
echo $comida[2] . "<br>";
echo $comida[3] . "<br>";

echo "<br>";

array_push ($comida, "Camarones"); //Añade al final
array_pop ($comida); //Elimina al final
array_shift ($comida); // Elimina al comienzo

foreach ($comida as $bocado){
    echo $bocado . "<br>";
} 
?>