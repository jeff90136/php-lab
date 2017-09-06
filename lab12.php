<?php   //poker
    $poker = range(0,51);
    shuffle($poker);

//    $mans=array(array(),array().array(),array());
    foreach ($poker as $k=>$v){
        $mans[$k%4][(int)($k/4)]=$v;
    }
    $pat = array('&spades;','<font color="red">&hearts;</font>','<font color="red">&diams;</font>','&clubs;');
    $num = array('A',2,3,4,5,6,7,8,9,10,'J','Q','K');
    echo '<table border="1">' ;
    foreach ($mans as $man){
        sort($man);
        echo '<tr>';
        foreach ($man as $card){
            echo '<td>';
            $pattern = $card%4;
            $number = (int)($card/4);
            echo "{$pat[$pattern]} {$num[$number]}";
            echo '</td>';
        }
    }
    echo '</table>';
