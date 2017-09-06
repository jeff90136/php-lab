<?php
    include 'shopcar.php';

    session_start();
//    $lott = rand(1,49);
//    $_SESSION['send']=$lott;
//
//    echo "{$lott}<br>";




    $member=new member('01','Jeff',3);
//    echo var_dump($member);
    $car =new cart($member);

    $_SESSION['send']=$car;

    $car->add('k01',2);
    $car->add('k02',4);
    $car->add('k01',5);
    $car->add('k04',1);


    $list= $car->getList();


    echo "HI~ {$member->getName()} :<br><hr>";

    foreach ($list as $i =>$j){
        echo "{$i}:{$j}<br>";
    }
?>
<a href="lab38.php">send</a>

