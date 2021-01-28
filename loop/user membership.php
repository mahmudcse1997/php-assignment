<?php
          // User Membership //

$credit = 12;

if($credit>0 && $credit<=12){

switch($credit){

    case 1:
        echo "You have to try to increase level up";
        break;

    case 5:
         echo "You are in basic level,,,carry on your effort";
         break;

    case 8:
         echo "You have become a platinum member";
        break;

    case 10:
        echo "You have become a gold member";
        break;

    case 12:
        echo "Congrats,,,,,You have become a Diamond member";
        break;


default: 
       echo "Reach a level, then try...Thank You";   

    }     
   
}
else{
    echo "You are out of range";
}

?>