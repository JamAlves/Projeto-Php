<?php
/* conectores de comparação , sempre usa o vardump para imprimir uma comparação
   usando conectivos , não o echo.
   echo e usado pra imprimir uma variavel sozinha.
*/ 

$a = 55.0;
$b = 55;

var_dump($a > $b); 

echo "<br>";

var_dump($a < $b);

echo"<br>";

var_dump($a == $b);

echo"<br>";

var_dump($a === $b);

echo"<br>";

var_dump($a != $b);

echo"<br>";

var_dump($a !== $b);


?>