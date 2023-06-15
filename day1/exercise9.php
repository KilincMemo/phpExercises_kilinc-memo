<?php

$numbers = array(21565, 3412, 180,
1556, 182, 84, 15);

foreach ($numbers as $nb){
    if ($nb % 3){
        echo "$nb ,";
    }
}

?>