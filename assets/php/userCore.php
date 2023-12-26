<?php

include_once("function.php");
$conn_f = new databese();
$conn_f->connect();
$conn = $conn_f->connect;

if (isset($_POST['signup'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $numbar = $_POST['numbar'];
    $country = $_POST['country'];
    $sql = "INSERT INTO user (name,email,nambar,coutry,password)VALUES('$name','$email','$numbar','$country',$password);";
    $sqlconn = mysqli_query($conn,$sql);

    if ($sqlconn) {
        header("location:../../loginsign.php?log=login");
    }else {
        header("location:../../loginsign.php?log=signup?fail");
    }
}


if (isset($_POST['login'])) {
    $uName = $_POST['userName'];
    $uPass = $_POST['password'];

    $qur = "SELECT email,password,id,name FROM user";
    $sqlconn = mysqli_query($conn,$qur);
    if ($sqlconn) {
        while ($dbuser= mysqli_fetch_array($sqlconn) ) {
            $dbuserU = $dbuser['email'];
            $dbuserP = $dbuser['password'];
            $dbuserid = $dbuser['id'];
            $user_name = $dbuser['name'];
            if ($uName===$dbuserU && $uPass===$dbuserP) {
                header("location:../../user_profile.php");
                setcookie(md5('name'),$dbuserid, time() + (86400 * 100), "/");
                
            }else {
                header("location:../../loginSign.php?log=login&&psssword=dontmass");
            }
        } 
        

        

       
    }else {
        header("location:../../loginSign.php?log=login");
    }

   
}














?>