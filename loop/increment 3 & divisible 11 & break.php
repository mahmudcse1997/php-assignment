<?php
       // Increment 3 & Divisible 11 & Break //

for($digit=1; $digit<=200; $digit = $digit+3){
    
    echo $digit. "<br>";

    if($digit % 11 == 0){
        break;
    }

}

?>