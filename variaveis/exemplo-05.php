<?php

$nome = "Jayme";

function teste(){
	
    global $nome;
	echo $nome;
}

function teste2(){
    
    $nome = "ken";

   echo $nome."agora no teste2";

}

teste();

teste2();

?>