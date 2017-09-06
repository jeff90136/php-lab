<?php

    $upload=$_FILES['load'];

//    var_dump($upload);
//    foreach ($upload as $a =>$b){
//        echo "{$a} => {$b} <br>";
//    }
    foreach($upload['error'] as $a =>$b){
        if($b ==0){
         copy("{$upload['tmp_name'][$a]}","./uploadtest/{$upload['name'][$a]}");
         echo 'up more file ok!';
        }
}