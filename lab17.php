<?php
echo $_REQUEST['name'];


$inter=$_REQUEST['inter'];
foreach ($inter as $a=>$b){
    echo "{$a}:{$b}";
}