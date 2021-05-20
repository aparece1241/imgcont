<?php
    $request = $_SERVER['REQUEST_URI'];
    $BASE_PATH = dirname(__DIR__);         
    
    // Testing only
    include("$BASE_PATH/api/user/add.php");

    // Simple router with switch case
    switch ($request) {
        // welcome page
        case '/':
            include("$BASE_PATH/views/welcome.php");
            break;
        case '/login':
            echo "Login Page";
            break;
        case '/register':
            echo "Register Page";
            break;
        // User home page
        case '/home':
            include("$BASE_PATH/views/user/index.php");
            break;
        // Errors part
        case '/error/404':
            include("$BASE_PATH/views/errors/404.php");
            break;    
        case '/error/sql':
            include("$BASE_PATH/views/errors/sql.php");
            break;
        default:
            include("$BASE_PATH/views/errors/404.php");
            break;
    }

    /**
     * Redirects to the given route
     * 
     * @param string $route
     */
    function redirect($route)
    {
        $_SERVER['REQUEST_URI'] = $route;
    }
