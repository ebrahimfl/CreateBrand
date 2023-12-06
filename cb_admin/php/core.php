<?php
include_once("fun/fun.php");
$conn = new addmin();


if (isset($_POST['login'])) {
    $conn->addlog($_POST);    
}

if (isset($_POST['b_sub'])) {
    $conn->add_blog($_POST);   
}

if (isset($_GET["action"])) {
    $check = $_GET['action'];
    $id = $_GET['id'];
    if ($check==="delete") {
       if ($conn->delete("blog",$id)) {
        //yes or no button add korte hobe
        header("location:../../admin.php?val=AllBlog");
       }
    }
}
if (isset($_POST["blogup"])) {
   
    
}



?>