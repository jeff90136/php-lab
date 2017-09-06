<?php
$score =rand(0,100);
echo "Score:$score <br>";
if($score>=60){
    if($score>=70){
        if($score>=80){
            if($score>=90){
                echo 'A';
            }else{
                echo'B';
            }
        }else{
            echo'C';
        }
    }else{
        echo 'D';
    }
}else{
    echo'E';
}