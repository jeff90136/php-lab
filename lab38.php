<?php
//lab37
//    session_start();
//    $lotter = $_SESSION["send"];
//    echo "{$lotter}";
//    session_destroy();


//shopcar
    include 'shopcar.php';
    session_start();
    $go=$_SESSION['send'];
//    echo var_dump($car);
    $na = $go->getmember()->getname();
    echo "$na<br>";


    $list= $go->getList();
    echo "before:<br>";
    foreach ($list as $i =>$j){
        echo "{$i}:{$j}<br>";
    }

    $go->add('k01',2);
    $go->add('k01',2);
    $go->add('k01',2);
    $go->edit('K02',9);
    $go->clear('k04');


    echo "after:<br>";
    $list= $go->getList();
    foreach ($list as $i =>$j){
        echo "{$i}:{$j}<br>";
    }