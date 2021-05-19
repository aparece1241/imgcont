<?php 

    // Testing purposes
    include('../config/Database.php');

    $db = new Database();
    $conn = $db->getConnection();

    // Testing router
    include_once('../router/router.php');

    route('/', function () {
        return "Hello World";
    });
    
    route('/about', function () {
        return "Hello form the about route";
    });
    
    $action = $_SERVER['REQUEST_URI'];
    echo $action;
    dispatch($action);