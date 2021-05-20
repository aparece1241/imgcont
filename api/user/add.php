<?php
    $BASE_PATH = dirname(dirname(__DIR__)); 
    include("$BASE_PATH/model/User.php");

    echo User::$table;

