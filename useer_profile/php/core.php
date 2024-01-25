<?php session_start();
include_once('function/fun.php');
$fun = new fun();
$user_id = $_COOKIE[md5('name')];

// User Profile Logo and Banner Start
if (isset($_POST['profile_img_submit'])) {
    $querys = "SELECT img,img_c FROM user WHERE id=$user_id ";
    $result = $fun->select_count($querys);
    $old_img = $result->fetch_assoc();
    $result->num_rows;
    $sql = "UPDATE user SET ";


    if (isset($_FILES['banner_img']) && !empty($_FILES['banner_img']['name'])) {
        if ($name_img = $fun->img_validaction($_FILES['banner_img']['name'], $_FILES['banner_img']['tmp_name'], '../../assets/images/user/')) {
            if (!empty($_FILES['profile_logo']['name'])) {
                echo $sql .= "img_c='$name_img', ";
            } else {
                $sql .= "img_c='$name_img'";
            }
            if ($result->num_rows == 1) {
                unlink('../../assets/images/user/' . $old_img['img_c']);
            }
        } else {
            $fun->alert('danger', 'Something is Rong');
        }
    }
    if (isset($_FILES['profile_logo']) && !empty($_FILES['profile_logo']['name'])) {
        if ($name_img = $fun->img_validaction($_FILES['profile_logo']['name'], $_FILES['profile_logo']['tmp_name'], '../../assets/images/user/')) {
            $sql .= "img='$name_img' ";
            if ($result->num_rows == 1) {
                unlink('../../assets/images/user/' . $old_img['img']);
            }
        } else {
            $fun->alert('danger', 'Something is Rong');
        }
    }
    $sql .= " WHERE id=$user_id";
    if ($fun->insert($sql)) {
        $fun->alert('success', 'Your Image Upload');
        header('Location:../../user_profile.php');
    }
}
// User Profile Logo and Banner End


if (isset($_POST['user_data']) && !empty($_POST['user_data'])) {
    $name = $_POST['name'];
    $username = $_POST['username'];
    $nid_brith = $_POST['nid_brith'];
    $birthday = $_POST['birthday'];
    $gander = $_POST['gander'];
    $intro = $_POST['intro'];
    $sql = "SELECT COUNT(*) as count FROM user WHERE NOT (id = $user_id) AND username = '$username'";
    $result = $fun->select_count($sql);
    $row = $result->fetch_assoc();
    if ($row['count'] > 0) {
        $fun->alert('danger', 'username already exists');
        header('Location:../../edit-profile.php');
    } else {
        $sql = "UPDATE user SET name='{$name}',username='{$username}',intro='{$intro}',nid_brith=$nid_brith,birthday=$birthday,gander='{$gander}' WHERE id=$user_id";
        if ($fun->insert($sql)) {
            $fun->alert('success', "Your Profile Data Update");
            header('Location:../../user_profile.php');
        }
    }
}

if (isset($_POST['user_project_add']) && !empty($_POST['user_project_add'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $file_name = $_FILES['project_file']['name'];
    if (isset($file_name) && !empty($file_name)) {
        $ex_validation = ['zip',];
        $file_extanction = pathinfo($file_name, PATHINFO_EXTENSION);
        if (in_array($file_extanction, $ex_validation)) {
            $new_file_name = $user_id . '-' . rand() . time() . '.' . $file_extanction;
            move_uploaded_file($_FILES['project_file']['tmp_name'], '../../assets/images/user-project/' . $new_file_name);

            $sql = "INSERT INTO user_project(user_id,title,description,zip_file)VALUES($user_id,'{$title}','{$description}','{$new_file_name}')";
            if ($fun->insert($sql)) {
                $fun->alert('success', 'your project upload');
                header('Location:../../user_profile.php');
            }
        }else{
            $fun->alert('danger', 'only zip file allow');
            header('Location:../../add-project.php');
        }
    } else {
        return false;
    }
}

if(isset($_POST['user_skill_add']) && !empty($_POST['user_skill_add'])){
    // $other_skills= $
    $sql = "SELECT * FROM user_skills WHERE user_id= $user_id";
    $result= $fun->select_count($sql);
    $data=[];
    if($result->num_rows>0){
        while($row = $result->fetch_assoc()){
            $data[]=$row['skills'];
         }
    }
    
    foreach($_POST['user_skill'] as $element) {
        $element = trim($element); 
        if(!in_array(strtolower($element), array_map('strtolower', $data)) && !in_array($element, $data)){
            $sql = "INSERT INTO user_skills (user_id, skills) VALUES($user_id, '{$element}')";
            $fun->insert($sql);
        }
    }

    $fun->alert('success','Your Skills Add');
    header('Location:../../edit-profile.php');
}
