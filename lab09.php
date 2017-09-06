


<table border="1" width="100%">
            <?php
            for($a = 0;$a<2;$a++) {
                echo '<tr>';
                for ($y = 2; $y < 6; $y++) {

                    $color=$a+$y;

                    if($color%2==0) {
                        echo '<td style="background-color: blue">';
                    }else {
                        echo '<td style="background-color: yellow">';
                    }
                    for ($i = 1; $i < 10; $i++) {
                        $s = ($y+$a*4);
                        $r = $i * $s;

                        echo "{$s} * {$i} = {$r}<br>";
                    }
                    echo '</td>';
                }
                echo '</tr>';
            }
            ?>

</table>

