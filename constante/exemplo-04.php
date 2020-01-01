<?php

class constants {

    const MAX_VALUE = 10;
        public const MIN_VALUE =1;

}

// This will work
echo constants::MAX_VALUE;

// This will return syntax error
echo constants::MIN_VALUE;
?>
