<?php
    function createnumber($n){
        $number = range(0,9);
        shuffle($number);
        $result='';
        for($i=0;$i<$n;$i++){
            $result.=$number[$i];
        }
        return $result;
    }
    function check($a,$b){
        $A=$B=0;
        for($i=0;$i<strlen($a);$i++){
            $che = $b[$i];
            if($che == $a[$i]){
                $A++;
            }else if(substr_count($a,$che,0,strlen($a))>0){
                $B++;
            }
        }
        return "{$A}A{$B}B";
    }
    $fin='';
    if(!isset($_POST['answer'])||isset($_POST['restart'])){
        $his='';
        $ans= createnumber(3);
    }else{
        $ans= $_POST['answer'];
        $gss=$_POST['guess'];
        $his=$_POST['history'];
        $fin=check($ans,$gss);
        $his.="{$gss}=>{$fin}<br>";
    }

    echo $fin;


?>
<form method="post">
    <input type="hidden" name="answer" value="<?php echo $ans;?>">
    <input type="hidden" name="history" value="<?php echo $his;?>">
    <input name = "guess">
    <input type="submit" value="show">
    <br>
    <input type="submit" name ="restart" value="restart">
    <br>



</form>
<?php

echo $his;



?>