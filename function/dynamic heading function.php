<?php 

function dynamicHeading($heading='This is Header', $color='black', $tag='h1', $align='center'){

    echo "<$tag style= \"text-align: $align; color: $color; \" >$heading</$tag>";

}

dynamicHeading('This is current Header-1');
dynamicHeading('This is update Header-2', 'red');
dynamicHeading('This is Header-3', 'blue');

?>