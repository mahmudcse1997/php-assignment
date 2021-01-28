<?php 
function currency($BDT){
    
    $USD = $BDT * 0.0118;
    $canadianDollar = $BDT * 0.015;
    $pound = $BDT * 0.0086;
    
    echo "The value of $BDT tk is = $USD USD, <br> Canadian Dollars = $canadianDollar and <br> pound = $pound<hr>";
}

currency(100);
currency(200);
currency(500);
currency(10000);

?>