<?php 

/* Para pasarle un valor por defecto a la función */
function valoracion($nombre,$rating=0){
echo "El $nombre tiene un rating $rating";
}

/* Cuando no sabemos los parametros que se le pase a la variable  */

function conatenar(...$palabras){
$resultado="";

  foreach($palabras as $palabra){

    $resultado=$resultado.$palabra." ";

  }
  echo "<br>";
  echo $resultado;
}

valoracion("Curso Php");

conatenar('php','java','c++','javacriiy','php');






