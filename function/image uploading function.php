<?php

function imageUpload($image, $image_name){
    echo "<span style=\" display: block; text-align: center;\">$image</span>";
    echo "<span style=\" display: block; margin: 15px 0 50px 0; text-align: center;\"> $image_name</span>";
}

imageUpload('<img src=images/image_164.jpg height=400 width=400 border=3px solid black>', 'Picture-1');
imageUpload('<img src=images/image_155.jpg height=400 width=400 border=3px solid black>', 'Picture-2');
imageUpload('<img src=images/image_152.jpg height=400 width=400 border=3px solid black>', 'Picture-3');
imageUpload('<img src=images/image_134.jpg height=400 width=400 border=3px solid black>', 'Picture-4');
imageUpload('<img src=images/image_133.jpg height=400 width=400 border=3px solid black>', 'Picture-5');
imageUpload('<img src=images/image_165.jpg height=400 width=400 border=3px solid black>', 'Picture-6');

?>