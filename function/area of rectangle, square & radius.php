<?php

function getValue($name, $square, $circle, $length = 0, $breadth = 0){
    
    if($name == "rectangle"){
        $area = $length*$breadth;
        echo "The are of Rectangle is = $area sq units<hr>";

    } else if($name == "square"){
        $side = $length;
        $area = $side*$side;
        echo "The are of Square is = $area sq units<hr>";

    } else if($name == "circle"){
        $radius = $length;
        $area = 3.1416*($radius*$radius);
        echo "The are of Circle is = $area sqcm<hr>";
    }
    
}

getValue('rectangle', 0, 0, 10, 20);
getValue('square', 0, 0, 10);
getValue('circle', 0, 0, 5);
getValue('rectangle', 0, 0, 15, 30);
getValue('square', 0, 0, 20);
getValue('circle', 0, 0, 7);

?>