<?php

for ($i=1; $i <= 9; $i++) { 
    for ($j=1; $j <= 9; $j++) { 
       if ($i == 1 || $j == 1 && $i < 5 || $i = 5 || $j == 9 && $i > 5 || $i == 9) {
           echo "&nbsp&nbsp+";
       } else {
           echo "&nbsp&nbsp-&nbsp";
       }
    }
    echo "<br>";
}