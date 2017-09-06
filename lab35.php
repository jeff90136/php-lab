<?php
    $imgb=imagecreate(300,300);
    $imgh = imagecreatefromjpeg("./image/h.jpeg");

    $hx=imagesx($imgh); $hy=imagesy($imgh);
//    echo "{$hx}X{$hy}<br>";

    if($hx>$hy){
        $hxw=300;
        $hyh=$hy*$hxw/$hx;
//        echo "{$hxw}X{$hyh}<br>";
    }else{
        $hyh=300;
        $hxw=$hx*$hyh/$hy;
//        echo "{$hxw}X{$hyh}<br>";
    }

    imagecopyresized($imgb,$imgh,0,0,0,0,$hxw,$hyh,$hx,$hy);


    header("content-type:image/jpeg");
    imagejpeg($imgb);


    imagedestroy($imgb);