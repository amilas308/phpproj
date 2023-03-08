<?php
    $host_name = 'localhost';
    $username = 'btech';
    $password = 'amilas/308';
    $dbname = 'login_db';
    $conn = new  mysqli_connect(hostname: $host_name, 
                                username: $username, 
                                password: $password, 
                                database: $dbname);
    // if($conn->conn_error){
    //     die('Database Error' . $conn->conn_error);
    // }
    return $conn;


?>
