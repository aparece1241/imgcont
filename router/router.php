<?php
    $request = $_SERVER['REQUEST_URI'];
    $BASE_PATH = dirname(__DIR__);         


    // Simple router with switch case
    switch ($request) {
        // welcome page
        case '/':
            include("$BASE_PATH/views/welcome.php");
            break;
        // User home page
        case '/home':
            include("$BASE_PATH/views/user/index.php");
            break;
        // Errors part
        case '/error/404':
            include("$BASE_PATH/views/errors/404.php");
            break;    
        default:
            include("$BASE_PATH/views/errors/404.php");
            break;
    }
