<?php

function getHeightWeight(string $name, $fit, $inch, $weight){

    $fit = $fit * 12;

    $height = ($fit + $inch) * 0.0254;

    $BMI = $weight / ($height*$height);

    echo "Hi $name, Your BMI is = $BMI<br><br>";
}

getHeightWeight('Hasan', 5, 10, 70);
getHeightWeight('John', 5, 5, 68);
getHeightWeight('Nahid', 5, 5, 61);
getHeightWeight('Raihan', 5, 7, 63);

?>