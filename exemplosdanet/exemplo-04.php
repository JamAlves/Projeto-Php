<?php

// thx mandor at mandor
ini_set('max_execution_time', 0);
ini_set('implicit_flush', 1);
ob_implicit_flush(1);

echo 'doing something';  my_flush();
sleep(5);
echo 'doing something else'; my_flush();
sleep(5);
echo 'finally done - hooray';

function my_flush() {
  // following matt at hevanet's lead
  for ($i=0;$i<10000;$i++) echo ' ';
  ob_flush();
  flush();
    
 };  

?>