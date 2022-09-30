<?php
   $a = readline("enter num: ");
   $b = readline("enter num: ");
   $d = true;
   
   
   if($a < 100 and $a >0 and $b < 100 and $b >0 and $d = true){
       $c = $a *$b;
       echo "multiplication is $c";
   }
   if($a > 100){
       echo "ur first number is over 100!!!!\n";
       $y = readline("enter new num under 100 instead of first number: ");
       $numb = $b *$y;
       echo "multiplication is $numb";
   }
   if($b > 100){
       echo "ur second number is over 100!!!!\n";
       $y = readline("enter new num under 100 instead of second number: ");
       $num = $a *$y;
       echo "multiplication is $num";
       
   }
   if($a = 0 or $b = 0){
       echo "you typed 0";
       exit();
   }
   
   
?>
