<?php

$a_bool = TRUE;   // um booleano
$a_str  = "foo";  // uma string
$a_str2 = 'foo';  // uma string
$an_int = 12;     // um inteiro

echo gettype($a_bool); // mostra:  boolean
echo "<br>";

echo gettype($a_str);  // mostra:  string

// Se ele é um inteiro, incrementa-o com quatro
if (is_int($an_int)) {
    $an_int += 4;
}

// Se $bool é uma string, mostre-a
// (não imprime nada)
if (is_string($a_bool)) {
    echo "String: $a_bool";
}

?>