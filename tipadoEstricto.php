<?php
/* Declara tipado estricto */
/* Tipo de datos int, float , string,bool,array,object, null*/
declare(strict_types=1);

function sumarEnteros(int $entero1,int $entero2): int | float


{
return ($entero1+$entero2)/2;
}

$resultado=sumarEnteros(5,2);

echo $resultado;

?>