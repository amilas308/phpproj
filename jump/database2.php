<?php
    $name = $email = $phone = $password = "";
    $nameErr = $emailErr = $phoneErr = $passwordErr = "";
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
        $conn =  mysqli_connect('localhost', 'jam', 'password', 'reg_form');
        
        // $name = mysql_real_escape_string($_POST['name']);
        // $email = mysql_real_escape_string($_POST['email']);
        // $phone = mysql_real_escape_string($_POST['phonenumber']);
        // $password = mysql_real_escape_string($_POST['password']);
        // $c_password = mysql_real_escape_string($_POST['confirm_password']);

        // if ($name) {
        //     # code...
        // }
            if(!empty($_POST['name'])){
                $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            } else{
                $nameErr = 'Name is required';
            }
            if(!empty($_POST['email'])){
                $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
            } else{
                $emailErr = 'email is required';
            }
            if(!empty($_POST['phonenumber'])){
                $phone = filter_input(INPUT_POST, 'phonenumber', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            } else{
                $phoneErr = 'phone number is required';
            }
            if(!empty($_POST['password'])){
                // $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                $password = $_POST['password'];
                $c_password = $_POST['confirm_password'];
                // $password = $password==$c_password ? md5($password) : $passwordErr='Password is not match';
                if ($password == $c_password) {
                    $password = md5($password);
                }else{
                    echo 'Password is not match';
                    $passwordErr = 'Password is not match';
                }
            } else{
                $passwordErr = 'Password is required';
            }
            
            $sql = "INSERT INTO users(name, email, phonenumber, password) VALUES('$name', '$email', '$phone', '$password')";
            if(mysqli_query($conn, $sql)){
                echo 'Successfully Registered';
                echo '<br><a href="index.php" style="color: green;">Register User</a>';
            }
        }


?>