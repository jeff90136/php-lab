<?php
if(isset($_GET['edit']))header("location:lab43.php");
$sql =new mysqli('localhost','root','root','test');

$id=$_GET['id'];
$name=$_GET['name'];
$num=password_hash($_GET['number'],PASSWORD_DEFAULT);//加密
$bir=$_GET['birthday'];
$sql->query("update show01 set name='{$name}',number='{$num}',birthday='$bir' where id ='$id'");
header("location:lab43.php");