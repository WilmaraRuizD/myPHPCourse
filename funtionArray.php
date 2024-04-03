<?php
$array=[1,2,3];
/* asignacion de array de forma tradicional */
$a=$array[0];
$b=$array[1];
$c=$array[2];
/* asignacion de array de forma simpte*/
list($a,$b,$c)=$array;

/* Para rangos de array */
$array1=range(10,20);

var_dump($array1);

/* cuanto elementos tiene el array */

echo"<br>";
echo count($array1);

/* Encontar elementos de array forma en que yo lo haria  */

$arrayNombres=["victo","mara","juan","pedro","rodrigo"];

for ($i=0;$i<count($arrayNombres);$i++){
  if($arrayNombres[$i]=="mara"){
echo"si existe ".$arrayNombres[$i];
  }

}


/* Para borrar elementos del array */
unset($arrayNombres[1]);

/* Encontar elementos de array forma CON FUNCION  */

echo"<br>";
if(in_array('mara',$arrayNombres)){
  echo"es verdadero";
}else{
  echo"es falso";
}


?>