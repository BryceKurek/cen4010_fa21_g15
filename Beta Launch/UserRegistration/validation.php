<?php

session_start();

$con = mysqli_connect('localhost', 'cen4010_fa21_g15', 'N55POhE+OF', 'cen4010_fa21_g15');

mysqli_select_db($con, "cen4010_fa21_g15");

$name = $_POST['user'];
$pass = $_POST['password'];

$s = " select * from user where username = '$name' && password = '$pass'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1) {
    header('location:home.php'); #go to home page of project. name may change
} else {
    header('location:login.php');
}

?>