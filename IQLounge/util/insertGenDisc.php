<?php
session_start();
if(isset($_SESSION['userid']) && isset($_SESSION['username'])  && isset($_SESSION['firstname'])){
$conn = mysqli_connect("localhost","cen4010_fa21_g15","N55POhE+OF","cen4010_fa21_g15");

$content = $_POST['content'];
$username = $_SESSION['username'];
$id = $_SESSION['userid'];
$sql = "INSERT INTO post (content, date, name) VALUES ('$content', CURRENT_TIMESTAMP,'$username')";
mysqli_query($conn, $sql);

header("location: ../discussion.php?post=successful");}

?>