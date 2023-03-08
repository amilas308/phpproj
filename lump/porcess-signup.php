<?php
$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['password'];
if(empty($_POST['name'])){
    die('name is required');
}
if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
    die('email is required');
}
if(!preg_match("/[0-9]/", $_POST['password'])){
    die('password does not contain numbers');
}
if(!preg_match("/[a-z]/i", $_POST['password'])){
    die('password has no character');
}

if(count(str_split($_POST['password'])) < 8){
    die('password is too short');
}

if($_POST['password'] !== $_POST['confirm_password']){
    die('password does not match');
}
$password_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
$mysqli = require __DIR__ . '/database.php';
$sql = "INSERT INTO `user` (`id`, `name`, `email`, `password_hash`) VALUES (NULL, '$name', '$email', '$password_hash')";
if(mysqli_query($conn, $sql)){
    echo "Signup success";
    echo '<a href="/quints/lump/index.php">Register again<a/>';
}
// print_r($_POST);
// var_dump($password_hash);



?>