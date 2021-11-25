<?php

session_start();
//header('location:login.php');#relocation if php runs successfully

$con = mysqli_connect('localhost', 'cen4010_fa21_g15', 'N55POhE+OF', 'cen4010_fa21_g15');

mysqli_select_db($con, "cen4010_fa21_g15");

#naming linked to name value in html code
$name = $_POST['user'];
$pass = $_POST['password'];
$email = $_POST['email'];
$first = $_POST['firstname'];
$last = $_POST['lastname'];
$pass_check = $_POST['password_check'];

#start encryption
$hash = password_hash($pass, PASSWORD_DEFAULT);
#end encrytion

$s = " select * from user where username = '$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

#Username and Password Verification
if($num == 1) {
    echo"username already taken";
} else {
    if($pass == $pass_check) {
        $reg = "insert into user(email, username, firstname, lastname, password) values ('$email', '$name', '$first', '$last', '$pass')";
        mysqli_query($con, $reg);
        echo"Registration Successful";
    } else {
        echo"passwords were not identical";
    }
}

?>
