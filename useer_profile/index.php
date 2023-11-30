<?php

if (!isset($_COOKIE[md5("name")])) {
    header('location:../loginSign.php?log=login');
}else{
    header('location:../user_profile.php?user=profile');
}




?>