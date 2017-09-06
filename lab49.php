<?php
    $sql =new mysqli('localhost','root','root','test');
    $name =$_GET['name'];
    $id =$_GET['id'];
    $rec=$sql->query("select id,name from show01 where id!={$id} and name='{$name}'");
    echo $rec->num_rows;