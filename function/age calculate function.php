<?php

function ageCalculate(string $name, int $birth_year){

    $age = date('Y') - $birth_year;
    echo "<hr><hr>Hi $name, your age is = $age.";

}

ageCalculate('Mahmud', 1997);
ageCalculate('Hasan', 1990);
ageCalculate('Kelvin', 1985);

?>