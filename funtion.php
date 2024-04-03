<?php 
/* Funtiones Prestablecidas */

/*  */
echo "Marcaa e tiempo ".time()."<br>";
echo "Raiz cuadrada de 9 ".sqrt(9)."<br>";
echo "Número aleatorio entre 90 y 100 ".rand(90,100)."<br>";
echo "Valor de número pi ".rand(90,100)."<br>";

/* funciones desarrolladas por mi
9!=1*2*3*4*5*6*7*8*9
*/

/* Firma del metodo basio */

function calcularFactorial($num){
  $resul=1;
  for($i=1;$i<=$num;$i++){
    $resul=$resul*$i;
  }
  echo "El fatorial de $num es> $resul <br>";

}


calcularFactorial(9);
calcularFactorial(2);
/* Firma del metodo retorna valor  */
function calcularOtro($n){
  $resul=1;
  for($i=1;$i<=$n;$i++){
    $resul=$resul*$i;
  }

  return $resul;
 /*  echo "El fatorial de $num es> $resul <br>"; */

}
$resultado=calcularOtro(7);
echo"El resultado retornado es :$resultado"





?>