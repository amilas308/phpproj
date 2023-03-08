<?php
    if(empty($_POST['name'])){
        die('Name is required');
    }
    if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        die('Valid email required');
    }
    if(strlen($_POST['password'] < 8)){
        die('password must be 8 characters long');
    }
    if( !preg_match("/[a-z]/i", $_POST['password'])){
        die('password must contain an uppercase');
    }
    if(! preg_match("/[0-9]/", $_POST['password'])){
        die('password must contain numbers');
    }
    if($_POST['password'] !== $_POST['Cpassword']){
        die('password does not match');
    }
    $passsword_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $conn = require __DIR__ . '/database.php';

    $sql = "INSERT INTO user(name, email, password_hash) VALUES(?,?,?)";
    $stmt = $conn->stmt_init();
    if(!$stmt->prepare($sql)){
        die('SQL error');
    }
    $stmt->bind_param( "sss",
                        $_POST['name'],
                        $_POST['email'],
                        $passsword_hash
);
    $stmt->execute();
    echo 'Signin successful';
    // print_r($_POST);
    // var_dump($passsword_hash);
?>{

}