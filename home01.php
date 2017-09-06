<?php
    $year =$month=$day= '';
if(isset($_GET['year'])) {
    $year=$_GET['year'];
    $month=$_GET['month'];
    switch ($month) {
        case 1:
        case 3:
        case 5:
        case 7:
        case 8:
        case 10:
        case 12:
            $day= 31;
            break;
        case 2:
            if ($year % 400 == 0) {
                $day=29;
            } else if ($year % 100 == 0) {
                $day=28;
            } else if ($year % 4 == 0) {
                $day=29;
            } else {
                $day=28;
            }

            break;
        case 4:
        case 6:
        case 9:
        case 11:
            $day =30;
            break;
        default:
            break;
    }



    }
?>
<form>
    please input <br>year:
    <input type="text" name="year" value="0">
<!--    <input type="submit">-->
    month:
    <input type="text" name="month" value="0">
    <input type="submit">
    <?php
    echo "<br><br><br>{$year} year {$month} month has {$day} day!!";
    ?>

</form>
