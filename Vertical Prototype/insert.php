<?php
require "dbConn.php";

$email = $_POST['email'];
$username = $_POST['username'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$password = $_POST['password'];

$sql = "INSERT INTO user (email, username, firstname, lastname, password) VALUES ('$email','$username','$firstname','$lastname','$password')";
mysqli_query($db, $sql);

header("location: ../test/prototype.php?signup=success");

?>