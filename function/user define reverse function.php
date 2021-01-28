<?php

function reverse($text, $reverse='strrev'){
    echo "$text = ";
    echo  $reverse ($text);
    echo "<br><br>";

    
}
reverse('I am Reverse Text');
reverse('I want to be an Developer');
reverse('This is reverse Text');
?>