<?php
    $hostname = 'localhost';
    $username = 'btech';
    $password = 'amilas/308';
    $database = 'fresh_db';
    $conn =  mysqli_connect( $hostname, 
                             $username, 
                             $password, 
                             $database);
    if($conn->connect_error){
        die('Connection'. $conn->connect_error);
    }
    return $conn;



?>