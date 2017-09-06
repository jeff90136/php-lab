<?php
    $year = '';

if(isset($_GET['year'])) {
    $year=$_GET['year'];
    if ($year % 400 == 0) {
        echo 'YES';
    } else if ($year % 100 == 0) {
        echo 'NO';
    } else if ($year % 4 == 0) {
        echo 'YES';
    } else {
        echo 'NO';
    }
}
?>
<form>
    input year:
    <input type="text" name="year" value="0">
    <input type="submit">

</form>

