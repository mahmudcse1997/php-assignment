<?php

function getResult($marks){

    $gpa = "";
    $grade = "";

    if($marks >= 0 && $marks < 40){
        $gpa = 0;
        $grade = "F";
 
    }else if($marks >= 40 && $marks < 50){
        $gpa = 1;
        $grade = "D";

    }else if($marks >= 50 && $marks < 60){
        $gpa = 2.5;
        $grade = "B";

    }else if($marks >= 60 && $marks < 70){
        $gpa = 3;
        $grade = "A-";

    }else if($marks >= 70 && $marks < 80){
        $gpa = 4;
        $grade = "A";

    }else if($marks >= 80 && $marks < 100){
        $gpa = 5;
        $grade = "A+";

    }else{
        $gpa = "INVALID";
        $grade = "INVALID";
    }

    echo "Your GPA is = $gpa<br>";
    echo "Your Grade is = $grade<hr><hr>";
}

getResult(86);
getResult(76);
getResult(66);
getResult(56);
getResult(46);
getResult(36);
getResult(222);

?>