<?php
    $sql =new mysqli('localhost','root','root','test');

    $name=$_GET['name'];
    $num=password_hash($_GET['number'],PASSWORD_DEFAULT);//加密
    $bir=$_GET['birthday'];
    $sql->query("insert into show01(name,number,birthday) VALUE ('{$name}','{$num}','{$bir}')");
    header("location:lab43.php");


