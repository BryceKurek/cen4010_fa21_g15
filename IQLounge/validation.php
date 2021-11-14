<?php

$con = mysqli_connect('localhost', 'cen4010_fa21_g15', 'N55POhE+OF', 'cen4010_fa21_g15');

mysqli_select_db($con, "cen4010_fa21_g15");

$name = $_POST['user'];
$pass = $_POST['password'];

$s = "SELECT * FROM user WHERE (username = '$name')";
$result = mysqli_query($con, $s);

if(!$result){
    die(mysqli_error($con));
}
if(mysqli_num_rows($result) > 0)
{
    $data = mysqli_fetch_array($result);


    if(password_verify($pass, $data['password'])) {
        header('location:index.html'); #go to home page of project. name may change
    } else {
        header('location:login.php');
    }
}
?>