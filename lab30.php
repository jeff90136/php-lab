<?php
    $upload=$_FILES['load'];

    foreach ($upload as $a =>$b){
        echo "{$a} => {$b} <br>";
    }

    if($upload['error']==0){
        if(copy("{$upload['tmp_name']}","./uploadtest/{$upload['name']}")){
            echo 'upload ok';
        } else{
            echo 'upload error';
        }
    }else{
        echo 'upload damage!';
    }
