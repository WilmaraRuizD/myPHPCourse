<?php
$nombre="Wilmara Ruiz";
$Nombre="Otro Nombre";

/* Para definir cost en php de definen en funcion define('nombre','valor') */

define('Curso','PHP desde cero');
define('USUARIO_1','Victor');

define('Animal',[
  'Perro',
  'Gato',
  'Loro',
  'Tortuga 
  '
]);


echo Animal[2];
echo Curso;

if(defined('Curso1')){
echo "Si se ha definido";
}
echo "Mi version de PHP es:".PHP_VERSION;
echo "<br>";
echo "Mi sistema operativo es: ".PHP_OS;
echo "<br>";
echo PHP_EXTENSION_DIR;
echo "<br>";
echo PHP_SAPI;
echo "<br>";
echo __LINE__;


/* Tipo de datos  */

/* Entero integar numeros y desimales */

/* flotante doble */
$numeroEntero=123.454566;


/* Cadena */
$datoCadena='Es cadena "Wilmara"';

/* Para usar "" ''al mismo tiempo en un data string se coloca /  */

$datoPersona="Mi nombre es 'wilmara' y mi edad es \"30\"";
$bool=true;
$otro;

echo"<br>";
echo "es false".$bool;
echo"<br>";


echo"<br>";
echo $datoPersona;
echo "<br>";
echo $numeroEntero;

echo "<br>";
echo $datoCadena;

/* Operadores Matematicos: de asignación =
operador unario = -(Cambio de signo)
OPERADORES ARITMETCOS
*/
$variable=14;
$variable_1=-$variable;
echo "<br>";
echo $variable;

$a=2;
$b=5;
$c=$a+$b;
echo "<br>";
echo $c;
echo "<br>";
/* orden matematico multiplicaciones y diviciones sumas y restas */

$operar= 4*5-6+4*2+1*0;
echo $operar;
echo "<br>";

/* Operadores de comparación */
$a1=4;
$a2=5;
var_dump($a1<$a2 || $a1>$a2 );


?>
