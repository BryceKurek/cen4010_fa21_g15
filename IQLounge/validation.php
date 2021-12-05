<?php
include("dbConn.php");
session_start();

$name = $_POST['user'];
$pass = $_POST['password'];

if(empty($name)){
    header ("Location: login.php?error=Username is required");
    exit();
}
else if(empty($pass)){
    header("Location: login.php?error=Password is required");
    exit();
}

$sql = "SELECT * FROM user WHERE username ='$name'";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result)>0){
    $row = mysqli_fetch_array($result);
    if(password_verify($pass, $row['password'])){
        echo "Logged In!";
	$_SESSION['firstname'] = $row['firstname'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['userid'] = $row['userid'];
        header("Location: discussion.php");
        exit();
    } else{
        header("Locaton: login.php");
        exit();
    }
}
else{
    header("Location: login.php");
    exit();
}
?>