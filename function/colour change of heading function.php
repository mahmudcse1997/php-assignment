<?php 

function changeHeadingColour($color='black', $tag='h1', $align='center'){

    echo "<$tag style= \"text-align: $align; color: $color; \" >I am $color Heading</$tag>";

}

changeHeadingColour('red');
changeHeadingColour('green', 'h2', 'left');
changeHeadingColour('blue', 'h2', 'right');
changeHeadingColour('violet');
changeHeadingColour('yellow', 'h2', 'right');
changeHeadingColour('black', 'h2', 'left');

?>