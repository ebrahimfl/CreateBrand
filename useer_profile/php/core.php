<?php session_start();
include_once('function/fun.php');
$fun = new fun();
$user_id = $_COOKIE[md5('name')];

// User Profile Logo and Banner Start
if (isset($_POST['profile_img_submit'])) {
    $sql = "UPDATE user SET ";

    if (isset($_FILES['banner_img']) && !empty($_FILES['banner_img']['name'])) {
        if ($name_img = $fun->img_validaction($_FILES['banner_img']['name'], $_FILES['banner_img']['tmp_name'], '../../assets/images/user/')) {
            if (!empty($_FILES['profile_logo']['name'])) {
                $sql .= "img_c='$name_img', ";
            } else {
                $sql .= "img_c='$name_img'";
            }
        } else {
            $fun->alert('danger', 'Something is Rong');
        }
    }
    if (isset($_FILES['profile_logo']) && !empty($_FILES['profile_logo']['name'])) {
        if ($name_img = $fun->img_validaction($_FILES['profile_logo']['name'], $_FILES['profile_logo']['tmp_name'], '../../assets/images/user/')) {
            $sql .= "img='$name_img' ";
        } else {
            $fun->alert('danger', 'Something is Rong');
        }
    }
    $sql .= " WHERE id=$user_id";
    echo $sql;
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
    $sql = "SELECT COUNT(*) as count FROM user WHERE NOT (id = $user_id) AND username = '$username'";
    $result = $fun->select_count($sql);
    $row = $result->fetch_assoc();
    if ($row['count'] > 0) {
        $fun->alert('danger', 'username already exists');
        header('Location:../../edit-profile.php');
    } else {
        $sql = "UPDATE user SET name='{$name}',username='{$username}',nid_brith=$nid_brith,birthday=$birthday,gander='{$gander}' WHERE id=$user_id";
        if ($fun->insert($sql)) {
            $fun->alert('success', "Your Profile Data Update");
            header('Location:../../user_profile.php');
        }
    }
}
