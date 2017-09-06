<?php
$month=rand(1,12);
echo "$month month<br>";
switch ($month){
    case 1:
    case 3:
    case 5:
    case 7:
    case 8:
    case 10:
    case 12:
        echo "31day";
        break;
    case 2:
        echo "28day";
        break;
    case 4:
    case 6:
    case 9:
    case 11:
        echo "30day";
        break;
    default:
        break;
}