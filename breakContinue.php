<?php
/* Parar o detere bucles  break continue die()funcion para terminar el programa igual a exit()*/
for($i=0;$i<=20;$i++){
/*   if($i==11){
    break;
  } */

  if($i==7 ||$i==15){
   continue;
  }
  echo"$i<br>";

}

echo"Saliste del bucle"




?>