<?php
    $sql =new mysqli('localhost','root','root','test');

    if($sql->connect_error){
        die ($sql->connect_error);
    }else{
        echo 'OK';
    }
    $ret = $sql->query("CREATE DATABASE test100");
var_dump($ret);