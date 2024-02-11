<?php
session_start();
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
    $sql = "INSERT INTO user (name,email,nambar,coutry,password)VALUES('$name','$email','$numbar','$country','$password');";
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
// oder 
if (isset($_POST['remove'])) {    
    $remove = $_POST['order_id'];
    foreach ($_SESSION['order'] as $key => $value) {
        
        if (isset($value['order_id'])) {
            $se_remove = $value['order_id'];
            if ($remove == $se_remove) {
        
                unset($_SESSION['order'][$key]);
                $_SESSION['order']= array_values($_SESSION['order']);
                header("location:../../loginSign.php?log=pricing");
                
            }
        } else {            
            echo "Value key is not set for order with key: $key";
        }

    }    
    
}
// conf order 
if (isset($_POST['order_conf'])) {
    
    if(isset($_COOKIE[md5('name')])){   
        $id = $_COOKIE[md5('name')];       
        
        foreach ($_SESSION['order'] as $key => $value) {
        
            // echo $order_id = $value['order_id']  ;
            // $price = $value['price']  ;
            // $discount = $value['discount']  ;
            // $ser_name = $value['ser_name']  ;
            // $help = $value['help']  ;
            
           
            
        }
        $ser = json_encode($_SESSION['order']);
        echo $sql = "INSERT INTO ordere (user_id,ser_name) VALUES('$id','$ser')";
        if (mysqli_query($conn, $sql)) {
            echo "ok";
            header("location:../../include/conga.php");
        }else {
            echo "ok  11";
        }
        

        
     }else {
        header("location: ../../loginsign.php?log=login");
     }
    
}















?>