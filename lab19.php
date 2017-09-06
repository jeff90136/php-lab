<form>
    <table border="1">
        <?php
        echo"<tr>";
            for($i=1 ; $i<=100;$i++){
                $type=true;

                for($j=2;$j<$i;$j++){
                    if($i%$j==0){
                        $type=false;
                        break;
                    }else{
                        $type=true;
                    }
                }

                if($type==0 || $i==1){
                    echo "<td>";
                }else{
                    echo "<td bgcolor='#00ffff'>";
                }
                echo "{$i}</td>";


                if($i %10 == 0){echo"</tr> <tr>";}
            }

        ?>
    </table>

</form>
