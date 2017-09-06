<?php//poker
$poker = range(0,51);
for($i=51;$i>=0;$i--){
    $k = rand(0,$i);
    $number = $poker[$k];
    for($x=$k;$x<51;$x++){
        $poker[$x]=$poker[$x+1];
    }
    $poker[51]=$number;
}
foreach ($poker as $value){
    echo "{$value}<br>";
}