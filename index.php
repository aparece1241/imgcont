<?php
    
    // Initailized connection to database
    include_once('./config/Database.php');
    
    // initialize connection
    new Database();

    // Import the router file
    include_once('./router/router.php');
    