<?php
    require_once 'lib/simpleimage/SimpleImage.php';       
    $image = new SimpleImage();
    $image->load('test.png');
    $image->resizeToWidth(100);
    $image->save('mini/image-test.png');
?>

