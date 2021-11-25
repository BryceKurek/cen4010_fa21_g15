<?php

session_start();
if(isset($_SESSION['userid']) && isset($_SESSION['username'])){
    ?>

    <!DOCTYPE html>
    <html>
        <head>
            <title>Home Page</title>
            <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
            <link href="css/login.css" rel="stylesheet" />
        </head>
        <body>
            <h1>Welcome, <?php echo $_SESSION['firstname']; ?></h1>
            <a href ="logout.php">Logout</a>
        </body>
    </html>
    <?php
}
else{
    header("Location: login.php");
    exit();
}
?>


