<?php
$sql =new mysqli('localhost','root','root','test');
$rec = $sql->query("select * from show01 where id=118");

//var_dump($rec);
$da = $rec->fetch_object();

?>
<table border="1">
    <tr>
<!--        <td>--><?php //echo $da->id?><!--<br></td>-->
        <td><?php echo $da->name?><br></td>
        <td><?php echo $da->number?><br></td>
        <td><?php echo $da->birthday?><br></td>

    </tr>

</table>
