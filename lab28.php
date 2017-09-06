<?php
    if(!isset($_GET['filename'])){
        header("location:lab27.php");
    }
    $name = $_GET['filename'];
    $text = $_GET['text'];

    $lp=fopen("./text/{$name}",'w');
    fwrite($lp,$text);
    fclose($lp);
    header("location:./text/{$name}");