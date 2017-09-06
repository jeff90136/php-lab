<?php
    session_start();

    $a1=$_SESSION['v1'];
    $a2=$_SESSION['v2'];
    $a3=$_SESSION['v3'];
    $a4=$_SESSION['v4'];

    var_dump($a1);
    echo "<br>";
    var_dump($a2);
    echo "<br>";
    var_dump($a3);
    echo "<br>";
    var_dump($a4);