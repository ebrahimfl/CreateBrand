<?php session_start();
include_once("assets/php/function.php");
$conn_f = new databese();
$conn_f->connect();
$conn = $conn_f->connect;

include_once("assets/php/function.php");

$ip =$_SERVER['REMOTE_ADDR'];
$query = "SELECT * FROM visitor WHERE ip='$ip'";
$result=$conn->query($query);
if($result->num_rows == 0){
$query = "INSERT INTO visitor(ip)VALUES('$ip')";
$conn->query($query);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crete of Brand</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/site_responsive.css">
    <link rel="icon" href="assets/images/logo-01.svg">
