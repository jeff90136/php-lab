<?php
    $count=$_GET['count'];
    $img = imagecreate(400,40);

    $yellow = imagecolorallocate($img,255,255,0);
    $red = imagecolorallocate($img,255,0,0);
    imagefilledrectangle($img,0,0,400,40,$yellow);
    imagefilledrectangle($img,0,0,(int)(4*$count),40,$red);
//    echo '123';
    header("content-type:image/jpeg");
    imagejpeg($img);


    imagedestroy($img);