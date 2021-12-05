<?php

$conn = mysqli_connect("localhost","cen4010_fa21_g15","N55POhE+OF","cen4010_fa21_g15");

$content = $_POST['content'];
$firstname = $_POST['firstname'];
$id = $_POST['userid'];
$sql = "INSERT INTO post (content, date, name, userid) VALUES ('$content', CURRENT_TIMESTAMP,'$firstname','$id)";
mysqli_query($conn, $sql);

header("location: ../discussion.php?post=successful");

?>