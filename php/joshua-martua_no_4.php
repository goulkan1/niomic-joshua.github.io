<?php 
 function ganjilGenap($num)
 {
      if($num>1)
      ganjilGenap($num-1);
      $num%2==0? $bil="Genap": $bil="Ganjil";
      echo $num.". Bilangan $bil<br>";
      return;
 }
 ganjilGenap(10);
 
?>