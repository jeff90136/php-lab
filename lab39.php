<?php
include 'shopcar.php';
    session_start();
    $va1=12;
    $va2=false;
    $va3=array(5,3,8);
    $v4 = new test;
    $v4->test=100;
    $_SESSION['v1']=$va1;
    $_SESSION['v2']=$va2;
    $_SESSION['v3']=$va3;
    $_SESSION['v4']=$v4;

    $v4->test=123;


    ?>
    <a href="lab40.php">send!</a>