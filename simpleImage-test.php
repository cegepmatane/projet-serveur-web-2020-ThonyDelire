<?php
    require_once 'lib/simpleimage/SimpleImage.php';       
    $image = new SimpleImage();
    $image->load('illustration/contenu.png');
    $image->resizeToWidth(100);
    $image->save('mini/contenu.png');
?>

