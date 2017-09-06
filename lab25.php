<?php
//    $lp=fopen('./lab23.php','r');

//    while($ping=fread($lp,1)){
//        echo $ping;
//    }
//    while($ping=fgets($lp)){
//        echo $ping;
//    }
    $lp=fopen('./fireman.csv','r');
        $ping=fgets($lp);
        $ping=fgets($lp);
        $data=explode(',',$ping);
        foreach ($data as $i){
            echo "{$i}<br>";
        }


    fclose($lp);