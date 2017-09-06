<?php
    $a = array(1,2,3,4,5,6);
    echo count($a);

    echo '<hr>';

    $b[0]=12;
    $b[5]='34';
    echo count($b);
    echo "<hr>";

    $c[]=12;
    $c[]='12414.234';
    echo count($c);
    echo '<hr>';

    $d['name']='tom';
    $d['age']='12';
    echo count($d);
    echo '<hr>';

    $ary=[1.3];
    $ary[]='1234';
    $ary[10]='ddddd';
    $ary['age']=12;
    var_dump($ary);


    foreach ($ary as $k =>$v) {
        echo "<br>{$k}>{$v}";
    }
