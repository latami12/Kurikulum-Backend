<?php

for ($n =1; $n < 9; $n++) { 
    if ($n%2 == 1) {
        if ($n == 9) {
            continue;
        } else {
            echo $n . ', ';
        }
    }
    
}
