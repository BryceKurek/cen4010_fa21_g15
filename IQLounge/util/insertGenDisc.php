<?php

require "dbConn.php";

$content = $_POST['content'];

$sql = "INSERT INTO post (content, date) VALUES ('$content', CURRENT_TIMESTAMP)";
mysqli_query($db, $sql);

header("location: ../discussion.php?post=successful");

?>