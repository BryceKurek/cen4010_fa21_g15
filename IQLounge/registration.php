<?php
session_start();
//

$con = mysqli_connect('localhost', 'cen4010_fa21_g15', 'N55POhE+OF', 'cen4010_fa21_g15');
mysqli_select_db($con, "cen4010_fa21_g15");
if(mysqli_connect_error()) {
    exit('Error connecting to the database' . mysqli_connect_error());
}
if(!isset($_POST['username'], $_POST['password'], $_POST['email'], $_POST['firstname'], $_POST['lastname'], $_POST['password_check'])) {
    exit('Empty Field(s)');
}
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
        if($_POST['password'] == $_POST['password_check']){
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
    }
    $stmt->close();
}
else{
    echo 'Error occurred';
}
$con->close();
?>
/*mysqli_select_db($con, "cen4010_fa21_g15");

#naming linked to name value in html code
$name = $_POST['user'];
$pass = $_POST['password'];
$email = $_POST['email'];
$first = $_POST['firstname'];
$last = $_POST['lastname'];
$pass_check = $_POST['password_check'];

#start encryption
$hash = password_hash($pass, PASSWORD_DEFAULT);
#end encrytion

$s = " select * from user where username = '$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

#Username and Password Verification
if($num == 1) {
    echo"username already taken";
} else {
    if($pass == $pass_check) {
        $reg = "insert into user(email, username, firstname, lastname, password) values ('','$email', '$name', '$first', '$last', '$pass')";
        mysqli_query($con, $reg);
        echo"Registration Successful";
    } else {
        echo"passwords were not identical";
    }
} */