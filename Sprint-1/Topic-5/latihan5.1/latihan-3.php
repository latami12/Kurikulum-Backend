<?php                                                       
  $array =[2, 3, 4, 5, 6, 7, 8, 9];
 echo "<pre>";
  function nilai($array){
      foreach ($array as $value) {
          $hi[]= $value*3;  
      }  
      print_r($hi);
   
  }
     nilai($array);
     ?>