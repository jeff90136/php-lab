<?php
$sql =new mysqli('localhost','root','root','test');
//$rel=$sql->query("select * from company where Factory_Director like '陳__'");

$total=$sql->query("select * from company ");
$total2=$total->num_rows;
$count=10;
$page=1;
if(isset($_GET['page'])){
    $page=$_GET['page'];
}
$up=$page==1?1:$page-1;
$down=$page==ceil($total2/$count)?$page:$page+1;

$start=($page-1)*$count;
$rel=$sql->query("select * from company limit {$start},{$count}");
?>

<table width="80%" border="1">
    <tr>
        <td>ID</td>
        <td>公司名稱</td>
        <td>公司電話</td>
        <td>公司住址</td>
        <td>公司負責人</td>
        <td>食品項目</td>
    </tr>
    <?php
    while($abc=$rel->fetch_object()){
        echo"<tr>";
        echo"<td>{$abc->id}</td>";
        echo"<td>{$abc->Factory_CName}</td>";
        echo"<td>{$abc->Factory_Tel}</td>";
        echo"<td>{$abc->Factory_Address}</td>";
        echo"<td>{$abc->Factory_Director}</td>";
        echo"<td>{$abc->Product_Name}</td>";
        echo"</tr>";
    }
    ?>
</table>
<a href="lab53.php?page=<?php echo $up;?>">up</a>   |   <a href="lab53.php?page=<?php echo $down;?>">down</a>
