<?php
/* Bucle for */
$base=5;
$exp=4;

$result=1;

for($i=0;$i<=$exp;$i++ ){
  $result=$result*$base;
}
echo"El valor de $base elevado $exp es: $result";
echo "<br>";

/* Ejercicios */
/* *
   **
   ***
   ****
   *****
    */
    $filas=10;
    for($i=1;$i<=$filas;$i++){
      for($j=1;$j<=$i;$j++){
        echo "*";
      }
  
      echo "<br>";
    }

    /* foreach */

    $nombres=['Victor','Elisa','joan','Pepito'];

    echo $nombres[1]."<br>";
    echo $nombres[3]."<br>";

    echo"<br>";
    echo"<br>";
    foreach($nombres as $inice =>$nombre ){
      echo $nombre."se encontraba en el indice : $inice <br>";
    }


?>