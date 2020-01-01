<?php

// Nomes de constantes válidos
define("FOO",     "alguma coisa");
define("FOO2",    "alguma outra coisa");
define("FOO_BAR", "alguma coisa mais");

// Nomes de constantes inválidas
define("2FOO",    "alguma coisa");

// Isto é válido, mas deve ser evitado:
// O PHP pode vir a fornercer uma constante mágica
// que danificará seu script
define("__FOO__", "alguma coisa");

?>