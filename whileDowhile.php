<?php
/*  
BucleWhileDoWhile
Estructura algorimica repetitiva 
*/

$i=1;

while($i<=10){
  echo "Hola mundo $i <br>";
$i++;
}
echo"Ha salido del bucle";

/* do while */

$a=8;
do{
  echo "Hola mundo a $a <br>";
  $a++;
} while($a<10);
/* Practica */

$base=2;
$exp=5;
$resul=1;
$i=1;
while($i<=$exp){
  $resul=$resul*$base;
  $i++;
}

echo"El valor de $base elevado $exp es igual: $resul";
?>