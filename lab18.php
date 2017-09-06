<?php
    if (!isset($_REQUEST['account']))
        header("Location:lab15.php?error=2");
    $account = $_REQUEST['account'];
    echo $account.'123';