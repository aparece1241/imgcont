<?php
    // Headers
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: POST");
    header("Access-Control-Max-Age: 3600");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
    
    // Import the class
    $BASE_PATH = dirname(dirname(__DIR__)); 
    include("$BASE_PATH/model/User.php");

    // Get new connection
    $user = new User($db->getConnection());

    echo json_encode($_SERVER);
