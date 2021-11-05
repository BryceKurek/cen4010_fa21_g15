<?php

session_start();
header('location:login.php');#This location should change to home html page when implemented. Or maybe back to login page

$con = mysqli_connect('localhost', 'cen4010_fa21_g15', 'N55POhE+OF', 'cen4010_fa21_g15');

mysqli_select_db($con, "cen4010_fa21_g15");

$name = $_POST['user'];
$pass = $_POST['password'];
$email = $_POST['email'];
$first = $_POST['firstname'];
$last = $_POST['lastname'];

$s = " select * from user where username = '$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1) {
    echo"username already taken";
} else {
    $reg = "insert into user(email, username, firstname, lastname, password) values ('$email', '$name', '$first', '$last', '$pass')";
    mysqli_query($con, $reg);
    echo"Registration Successful";
}

?>