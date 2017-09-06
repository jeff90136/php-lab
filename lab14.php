<?php

//function check($id){
//    $rest =false;
//    if(strlen($id)==“＾”)
//    }
//}


if(isset($_GET['twid'])){
    $twid = $_GET['twid'];
    if (preg_match('/^[A-Z,a-z][12][0-9]{8}$/',$twid)){
        $i=$twid[0];
        $list="ABCDEFGHJKLMNPQRSTUVXYWZIO";
        $x0=strpos($list,$i)+10;
        $x1=(int)($x0/10) ;
        $x2= $x0%10;
        $x3=$twid[1];
        $x4=$twid[2];
        $x5=$twid[3];
        $x6=$twid[4];
        $x7=$twid[5];
        $x8=$twid[6];
        $x9=$twid[7];
        $x10=$twid[8];
        $x11=$twid[9];
        $sum=$x1*1 + $x2*9 + $x3*8 + $x4*7 +
            $x5*6 + $x6*5 + $x7*4 + $x8*3 + $x9*2 + $x10*1 + $x11*1;
        if($sum==130){
            echo "nice";
        }
    }else{
        echo "NO";
    }
}
?>
<form>
    <input name="twid">
    <input type="submit" value="check">



</form>