<?php

    $sql =new mysqli('localhost','root','root','test');

//    $test="INSERT INTO show01 (name) VALUES ('Tom')";
//    $test="delete from show01 where id=104";
//    $test="update show01 set name='john', number='123', birthday='none' where id=106";
    $test="select * from show01";

    $ret = $sql->query($test);

    var_dump($ret);