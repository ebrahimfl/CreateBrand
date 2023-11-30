<?php
include_once("fun/fun.php");
$conn = new addmin();


if (isset($_POST['login'])) {
    $conn->addlog($_POST);    
    
}



?>