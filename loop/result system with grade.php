<?php
          // Result System With Grade //

 $marks = 77;
 $name = 'Mahmud';
 $rel = ' ';

 if($name == 'Aditi' || $name == 'Ruma' || $name == 'Tara' || $name == 'Faria')
   {
       $rel = "Sister";
   }
   else{
       $rel = "Brother";
   }

 if($marks>=0 && $marks<=32) { echo "$rel, you are fail";}

 else if($marks>=33 && $marks<=39) { echo "$rel, You have passed barely";}

 else if($marks>=40 && $marks<=49) { echo "$rel, Your grade is 'C'";}

 else if($marks>=50 && $marks<=59) { echo "$rel, Your grade is 'B'";}

 else if($marks>=60 && $marks<=69) { echo "$rel, Your grade is 'A-'";}

 else if($marks>=70 && $marks<=79) { echo "$rel, Your grade is 'A'";}

 else if($marks>=80 && $marks<=100) { echo "$rel, Your grade is 'A+'";}


 else{
     echo "$rel, Check your input";
 }

?>