<?php
    function ya($count,$name='world'){
        for($i=0;$i<$count;$i++){
            echo "YA~~~{$name}<br>";
        }
    }

    function fx($x){
        return 2*$x +3;
    }
    function test(){
        for($i=0;$i<func_num_args();$i++){
            echo func_get_arg($i).'<br>';
        }
    }
    function test2(){
        $x=func_get_args();
        foreach ($x as $y){
            echo $y.'<br>';
        }
    }

//    ya();
//    ya(3);
//    echo fx(4).'<br>';
//
//    test(1,3,5,7,'qwer','12qw');
//    test2(1,3,5,7,'qwer','12qw');