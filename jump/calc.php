<?php
$num01 = $_POST['num01'];
$oper = $_POST['oper'];
$num02 = $_POST['num02'];
$email = $_POST['email'];
$allowed_ext = ['gmail.com', 'yahoo.com', 'nitda.com'];
// function calcOpertion($num01, $oper, $num02){
//     $sum;
//     switch($oper){
//         case 'add':
//             $sum = $num01 + $num02;
//             break;
//         case 'subtract':
//             $sum = $num01 - $num02;
//             break;
//         default:
//         $sum = 'Enter a proper value!';
//         break;
//     }
//     return $sum;
// }
// echo 'Value: ' . calcOpertion($num01, $oper, $num02);
// echo '<a href="index2.php">Calculate</a>';
$file_ext = explode('@', $email);
$file_ext1 = strtolower($file_ext[1]);
if(in_array($file_ext1, $allowed_ext)){

    $mail = strtolower($email); # $file_ext[0]. "@" .$file_ext1;

    echo $mail;
}else{
    echo "ghf";
}

// echo $file_ext;




?>