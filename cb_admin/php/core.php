<?php
include_once("fun/fun.php");
$conn = new addmin();


if (isset($_POST['login'])) {
    $conn->addlog($_POST);    
}

if (isset($_POST['b_sub'])) {
     $conn->add_blog($_POST); 
}
if (isset($_POST['S_sub'])) {
    $conn->serviec_add($_POST);   
}
if(isset($_POST['team_add']) && !empty($_POST['team_add'])){   
   $conn->team_add();
}

if (isset($_GET["action"])) {
    $check = $_GET['action'];
    $id = $_GET['id'];
    if ($check==="delete") {
       if ($conn->delete_image("blog","../../assets/images/blog/", "img" ,$id,)) {
        //yes or no button add korte hobe
        header("location:../../admin.php?val=AllBlog");
       }
    }
}
if (isset($_POST["blogup"])) {
   if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $conn->blog_update($id,$_POST);
   }
    
}
// monuwar write 
if (isset($_POST["save_change_email_input"])) {
    if (isset($_GET['id'])) {
         $id = $_GET['id'];
         $conn->update_user_data($id,$_POST);
    }
     
 }
 if (isset($_POST["save_add_eamil_get"])) {
    if (isset($_GET['id'])) {
         $id = $_GET['id'];
         $conn->save_add_eamil_ge($id,$_POST);
    }
     
 }
 if (isset($_POST["save_change_number_get"])) {
    if (isset($_GET['id'])) {
         $id = $_GET['id'];
         $conn->save_change_number_get($id,$_POST);
    }
     
 }
 if (isset($_POST["add_number_get_save"])) {
    if (isset($_GET['id'])) {
         $id = $_GET['id'];
         $conn->add_number_ge($id,$_POST);
    }
     
 }
 if (isset($_POST["change_country_get"])) {
    if (isset($_GET['id'])) {
         $id = $_GET['id'];
         $conn->change_country_get($id,$_POST);
    }
     
 }

 if (isset($_POST["save_add_country_get"])) {
    if (isset($_GET['id'])) {
         $id = $_GET['id'];
         $conn->save_add_country_get($id,$_POST);
    }
     
 }

 if (isset($_POST["save_add_country_get"])) {
   if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $conn->save_add_country_get($id,$_POST);
   }
    
}

?>