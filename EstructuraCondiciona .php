<?php
/*  Estructura Algoritmica Condiciona */ 

$a=6;
$b=5;

/* Como yo lo aria */
if($a==$b){
echo "Número a es igual al numero b";
}else{
  if($a>$b){
    echo "Número a es mayo al numero b";
  }else{
    echo "Número a es menor al numero b";
  }
}
echo "<br>";

/* Como lo recomienda el instructor */
if($a>$b){
  echo "Número a es mayo al numero b";
}elseif($a<$b){
  echo "Número a es menor al numero b";
}else{
  echo "Número a es igual al numero b";
}

?>
