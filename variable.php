<?php
/* variables local y variable globaln */

/* variable local &signo global */
$a=5;
$b=10;
function test(&$n){
  
  $n=$n+10;
  
}

test($a);
test($b);

echo "$a <br> $b"


?>