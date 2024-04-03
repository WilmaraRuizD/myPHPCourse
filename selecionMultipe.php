<?php
/* Operadores de selecion multipe  */
$a=1;

if($a==1){
  echo"Lunes <br>";
}elseif($a==2){
  echo"Martes <br>";
}elseif($a==3){
  echo"Miercoles <br>";
}elseif($a==4){
  echo"Jueves <br>";
}elseif($a==5){
  echo"Viernes <br>";
}elseif($a==6){
  echo"Sabado <br>";
}elseif($a==7){
  echo"Domingo <br>";
}
/* swic */
echo"<br>";
echo"<br>";
switch($a){
  case '1':
      echo"Lunes <br>";
    break;
  case '2':
      echo"Martes <br>";
    break;
  case '3':
        echo"Miercoles <br>";
      break;
  case '4':
          echo"Jueves <br>";
     break;  
  case '5':
            echo"viernes <br>";
    break;
  case '6':
              echo"Sabado <br>";
    break;
  case '7':
                echo"Domingo <br>";
    break;
  default:
  echo"Error de codigo <br>";

}

/* Match nueva estructura en php */

echo"<br>";
echo"<br>";

echo match ($a) {
  1 => "Lunes",
  2 => "Martes",
  3 => "Miercoles",
  4 => "Jueves",
  5 => "Viernes",
  6 => "Sabado",
  7 => "Domingo",
  default =>"Error de codigo <br>"
};

?>