<?php
//Boro hat & Soto hat Change

function borohat($hat_name){
    echo "<span style=\"text-transform: uppercase; font-size: 35px;\">$hat_name</span><hr>"; 
}

function sotohat($hat_name){   
    echo "<span style=\"text-transform: lowercase; font-size: 35px;\">$hat_name</span><hr>"; 
}
borohat('I am uppercase text');
sotohat('I am lowercase text');

?>