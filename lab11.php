<?php
 $art=array(1=>0,0,0,0,0,0);
 for($i=1;$i<=100;$i++){
     $value=rand(1,9);
     $art[$value>6?$value-3:$value]++;
//     if($value>6){
//         $value-=3;
//         $art[$value]++;
//     }else{
//         $art[$value]++;
//     }
 }


    foreach ($art as $k=>$number){
    echo "{$k}點出現{$number}次<br>";
 }