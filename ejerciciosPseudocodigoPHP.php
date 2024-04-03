<?php
/*  Hacer codigo que imprima los numeros de 1 en 1 hasta el 100 y desendente 100-1 */

$a=1;
$b=100;
$c=1;
$d=1;
$cantidadImpar=0;

echo "<br>";
echo "1. Números acendentes del 1-100";
echo "<br>";
while ($a <= 100) {
  echo " ".$a++;
}
echo "<br>";
echo "<br>";

echo "2. Números desendentes del 100-1";
echo "<br>";
while($b>=0){
  echo $b--." ";
}
/* Imprimalos números pares del 0 al 100 */
echo "<br>";
echo "<br>";
echo "3. Números pares";
echo "<br>";

while ($c <= 100) {
  if(($c%2)==0){
    echo" ".$c;
  }
  
  $c++;
}

/* Imprimalos números impares del 0 al 100 y cuantos numeros hay*/
echo "<br>";
echo "<br>";
echo "4. Números impares";
echo "<br>";

while ($d <= 100) {
  if(($d%2)==1){
    $cantidadImpar++;
    echo" ".$d;
  }$d++;
  
}
echo "<br>";
echo "<br>";
echo 'Cantidad de números impares es: '.$cantidadImpar;

/* Hacer un programa que imprima la suma de los 100 primeros numeros */
echo "<br>";
echo "<br>";
 $e=1;
 $f=0;
 $res=0;
while ($e <= 10) {
   $res=$f+$e;
   $e++;
   $f=$res;
  } 
  echo '5. El resultado de los 100 números es: '.$res;

echo "<br>";
echo "<br>";
echo '6. Numeros naturales hasta el valor ingresado por teclado ';
echo "<br>";
echo "<br>";
echo'Ingrese el número de teclado ';
?>