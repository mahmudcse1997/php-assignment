<?php

function getAge($age){

    $transform = "";


    if($age >= 1 && $age <= 12){
        $transform = "Children";

    }else if($age >= 13 && $age <= 19){
        $transform = "Teen-ager";

    }else if($age >= 20 && $age <= 50){
        $transform = "Young";

    }else if($age >= 51){
        $transform = "Old Man";
        
    }else{
        $transform = "Not match";
    }

    echo "<hr><hr>You are $transform, (Your age is = $age).";
}

getAge(7);
getAge(15);
getAge(25);
getAge(70);

?>