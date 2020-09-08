<?php

for ($i=1; $i <= 9; $i++) { 
    for ($j=1; $j <= 9; $j++) { 
        echo "(" . $i . "," . $j . ")";
    }
    echo "<br>";
}
    echo '<br>';

for ($i=1; $i <= 9; $i++) { 
    for ($j=1; $j <= 9; $j++) { 
       if ($i == $j || $i > $j) {
           echo "&nbsp&nbsp+";
       } else {
           echo "&nbsp&nbsp-&nbsp";
       }
    }
    echo "<br>";
}