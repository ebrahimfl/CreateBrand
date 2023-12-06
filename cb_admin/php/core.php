<?php
include_once("fun/fun.php");
$conn = new addmin();


if (isset($_POST['login'])) {
    $conn->addlog($_POST);    
    
}

if (isset($_POST['b_sub'])) {
    $conn->add_blog($_POST);
    
    
    
}



?>