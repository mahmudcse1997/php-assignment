<?php
          // Divisible 3 & 4 //

for($init=1; $init<=500; $init++)
{
    if($init%3==0)
        {
            echo "Divisible number for 3 is = $init<br>";
        }
        
}

echo "<hr>";
echo "<hr>";
echo "<p style='color:red; text-align:center; font-size:30px';><strong>>>=====DIVISIBLE '3' FINISHED UP=====<<</strong></p>";
echo "<hr>";
echo "<hr>";
echo "<p style='color:BLUE; text-align:center; font-size:30px';><strong>>>=====DIVISIBLE '4' STARTED BELOW=====<<</strong></p>";
echo "<hr>";
echo "<hr>";


for($init_2=1; $init_2<=500; $init_2++)
{
    if($init_2%4==0)
    {
        echo "Divisible number for 4 is = $init_2<br>";
    }
}

?>