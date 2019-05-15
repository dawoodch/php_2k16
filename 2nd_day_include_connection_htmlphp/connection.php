<?php

function connection() {
    $servername = 'localhost';
    $username = 'laravel';
    $password = 'laravel';
    $database = 'php_2k16';
    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);
    // Check connection
    if ($conn->connect_error) 
        die("Connection failed: " . $conn->connect_error);
    // else
    //     echo "Connection Successful";
        
    return $conn;
}


