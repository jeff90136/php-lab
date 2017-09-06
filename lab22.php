<?php
    date_default_timezone_set("Asia/Taipei");
 $dir = opendir('.');
 while($count=readdir($dir)){
     echo "{$count}=>";
     if(is_dir($count)){
         echo 'DIR=>';
     }else if(is_file($count)){
         echo 'file=>';
     }
     echo date('Y-m-d H:i:s',filemtime($count));
     echo '<br>';
 }

 if(copy('./lab23.php','./lab24.php')){
     echo 'OK';
 }else{
     echo 'faile';
 }
unlink('./lab24.php');