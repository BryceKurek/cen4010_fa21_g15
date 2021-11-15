<?
$db =  new mysqli("localhost","cen4010_fa21_g15","N55POhE+OF","cen4010_fa21_g15");

    if(!$db)
    {
        die("Connection failed: " . mysqli_connect_error());
    }
?>