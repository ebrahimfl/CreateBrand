<?php
include_once("connect.php");

if (isset($_POST['submite'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $numbar = $_POST['numbar'];
    $country = $_POST['country'];
}


$sql = "INSERT INTO user (name,email,nambar,coutry,password)VALUES('$name','$email','$numbar','$country',$password);";
$sqlconn = mysqli_query($conn,$sql);
if ($sqlconn) {
    header("location:../../loginsign.php?log=login");
}else {
    header("location:../../loginsign.php?log=signup");
}






?>