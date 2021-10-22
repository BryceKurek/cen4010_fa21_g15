<?php

//connection information
define("DB_HOST","localhost");
define("DB_NAME","cen4010_fa21_g15");
define("DB_CHARSET","utf8");
define("DB_USER","cen4010_fa21_g15");
define("DB_PASSWORD","N55POhE+OF");

//connect to database
$pdo = new PDO(
    "mysql:host=".DB_HOST.";charset=".DB_CHARSET.";dbname=".DB_NAME,
    DB_USER, DB_PASSWORD, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]
    );

//search
$stmt = $pdo->prepare("SELECT * FROM `user` WHERE `firstname` LIKE ? OR `email`");
$stmt->execute(["%".$_POST['search']."%"]);
$results = $stmt->fetchAll();
if(isset($_POST['ajax'])){echo json_encode($results);}

//insert data
$stmt2 = $pdo->prepare("INSERT INTO 'user' (email, username, firstname, lastname, password) VALUES ('email','username','firstname','lastname','password')");
$stmt2->execute(["%".$_POST['Insert']."%"]);
$result = $stmt2->fetchAll();
if($result){
    $msg = "register successful";
    echo $msg;
}
?>