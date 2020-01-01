<?php 

session_id('rnvlmupm1h52jfpcjl4vqpvgrc');

require_once("config.php");

session_regenerate_id();

echo session_id();

var_dump($_SESSION);

 ?>