<?php
session_start();

$con = mysqli_connect('localhost', 'cen4010_fa21_g15', 'N55POhE+OF', 'cen4010_fa21_g15');
mysqli_select_db($con, "cen4010_fa21_g15");

if(mysqli_connect_error()) {
    exit('Error connecting to the database' . mysqli_connect_error());
}
//if(!isset($_POST['username'], $_POST['password'], $_POST['email'], $_POST['firstname'], $_POST['lastname'], $_POST['password_check'])) {
    //exit('Empty Field(s)');
//}
if(empty($_POST['username']) || empty($_POST['password']) || empty($_POST['email']) || empty($_POST['firstname']) || empty($_POST['lastname']) || empty($_POST['password_check'])) {
    exit('Value Empty');
}

if($stmt = $con->prepare('SELECT userid, password FROM user WHERE username = ?')){
    $stmt->bind_param('s', $_POST['username']);
    $stmt->execute();
    $stmt->store_result();

    if($stmt->num_rows>0){
        echo 'Username already exists. Try again';
    }
    else{
        if($stmt = $con->prepare('INSERT INTO user (username, password, email, firstname, lastname) VALUES (?,?,?,?,?)')){
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $stmt->bind_param('sssss', $_POST['username'], $password, $_POST['email'], $_POST['firstname'], $_POST['lastname']);
            $stmt->execute();
	    header('location:login.php');#relocation if php runs successfully

            echo 'Successfully registered';
        }
        else{
            echo 'Error occurred';
        }
    }
    $stmt->close();
}
else{
    echo 'Error occurred';
}
$con->close();
?>