<?php
    $x=$y=$re=$play="";
        if(isset($_GET['x'])) {
        $x = $_GET['x'];
        $y = $_GET['y'];
        $play=$_GET['play'];
        switch ($play){
            case 0:
                $re = $x + $y;
                break;
            case 1:
                $re = $x - $y;
                break;
            case 2:
                $re = $x * $y;
                break;
            case 3:
                $v1 = (int)($x /$y);
                $v2 = $x % $y ;
                $re ="{$v1} ......{$v2}";
                break;
        }
//        $re = $x + $y;

        }else if(!isset($_GET['x'])){
            echo 'no data!';
        }
?>

<form>
    <input type="text" name="x" value="<?php echo $x;?>">
    <select name="play">
        <option value="0" <?php echo ($play==0)?'selected':''; ?>>+</option>
        <option value="1" <?php echo ($play==1)?'selected':''; ?>>-</option>
        <option value="2" <?php echo ($play==2)?'selected':''; ?>>*</option>
        <option value="3" <?php echo ($play==3)?'selected':''; ?>>/</option>
    </select>
    <input type="text" name="y" value="<?php echo $y;?>">
    <input type="submit" value="=">
    <?php echo $re ?>
</form>
