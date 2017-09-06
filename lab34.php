<?php
    $img = imagecreatefromjpeg("./image/apple.jpeg");

//    $yellow = imagecolorallocate($img,255,255,0);
        $black=imagecolorallocate($img,0,0,0);
//    $red = imagecolorallocate($img,255,0,0);
//    imagefilledrectangle($img,0,0,400,40,$yellow);
//    imagefilledrectangle($img,0,0,(int)(4*$count),40,$red);
//    echo '123';
    imagettftext($img,24,45,50,100,$black,"./font/fireflysung.ttf","YO~~~~~~~");

    header("content-type:image/jpeg");
    imagejpeg($img);


    imagedestroy($img);