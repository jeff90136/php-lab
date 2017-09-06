<?php
if (isset($_REQUEST['error'])){
    echo '請輸入正確資料';
}
?>

<script>
    function check(name){
        name.value +="XXXX";
        return name;
    }

</script>


<form action="lab17.php" method="get">
    <input name="name"><br>
    <input type="password" name="password"><br>
    <input type="radio" name="gender" value="m" checked>man
    <input type="radio" name="gender" value="w">woman
    <br>
    <input type="checkbox" name="inter[]" value="A">A
    <input type="checkbox" name="inter[]" value="B">B
    <input type="checkbox" name="inter[]" value="C">C
    <br>
    <select name="side">
        <option value="101">W</option>
        <option value="201">s</option>
        <option value="301">a</option>
        <option value="401">d</option>
    </select>
    <br>
    <textarea name="area"rows="10" cols="20"></textarea>
    <br>
    <input type="file" name="file">
    <br>
    <input type="submit" name="send1" value="send1">
    <input type="submit" name="send2" value="send2">

</form>
<hr>
<form action="lab16.php" onsubmit="check(na)">
    <input id="na" name="name" value=""><br>
    <input type="password" name="password"><br>
    <input type="submit" name="send">

</form>

<!--<form action="lab18.php">-->
<!--    <input type="text" name="number">-->
<!--    <br>-->
<!--    <input type="submit" value="OK">-->
<!---->
<!--</form>-->
<form action="lab18.php">
    <input name="account"><br>
    <input type="submit" value="OK">
</form>
