<?php
    require_once 'lib/simpleimage/SimpleImage.php';       
    $image = new SimpleImage();
    $image->load('illustration/prelude.jpg');
    $image->resizeToWidth(100);
    $image->save('mini/prelude.jpg');
?>

