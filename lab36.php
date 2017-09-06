<?php
class car{
    var $color;
    private $speed;
    var $door;
    function up(){
        $this->speed = ($this->speed<1)?1:$this->speed*1.2;
    }
    function down(){
        $this->speed-=7;
    }
    function get(){
        return $this->speed;
    }
    function __construct($s=10){
        echo "YO~~~~~~~~~~~~~~~~~<br>";
        $this->speed=$s;
    }
}

$mycar = new car(50);
$yourcar = new car();
//$mycar->speed = 20;
//$yourcar->speed = 50;

echo "mycar speed:{$mycar->get()}<br>";
echo "yourcar speed:{$yourcar->get()} <br>";

$mycar->up();
$mycar->up();
$mycar->up();
$yourcar->down();

echo "mycar speed:{$mycar->get()}<br>";
echo "yourcar speed:{$yourcar->get()}<br>";