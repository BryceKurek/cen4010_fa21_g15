<?php
include("dbConn.php");
session_start();


if(isset($_POST['user']) && isset($_POST['password'])){
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}
$name = validate($_POST['user']);
$pass = validate($_POST['password']);

if(empty($name)){
    header ("Location: login.php?error=Username is required");
    exit();
}
else if(empty($pass)){
    header("Location: login.php?error=Password is required");
    exit();
}

$sql = "SELECT * FROM user WHERE username ='$name' AND password='$pass'";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result)>0){
    $row = mysqli_fetch_array($result);
    if($row['username']==$name && $row['password']==$pass){
        echo "Logged In!";
        $_SESSION['username'] = $row['username'];
        $_SESSION['userid'] = $row['userid'];
        header("Location: discussion.php");
        exit();
    }
    else{
        header("Locaton: login.php?error=Incorrect Username or Password");
        exit();
    }
}
else{
    header("Location: login.php");
    exit();
}

/*
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
}*/