<?php session_start();

function base_url($url){
    $page = $_SERVER['SCRIPT_NAME'];
    $page = str_replace("/CreateBrand/", "", $_SERVER['SCRIPT_NAME']);
    $remove =rtrim($_SERVER['SCRIPT_NAME'], $page);
        
    if ($remove !== ""){
        $remove1 =$remove."";
        $servarname = "http://localhost/createBrand/";
    }else{

        $servarname = $_SERVER['DOCUMENT_ROOT']."/";
    }
    
    echo $servarname.$url;
}

include_once("assets/php/function.php");
$conn_f = new databese();
$conn_f->connect();
$conn = $conn_f->connect;
$function = new fun();

include_once("assets/php/function.php");

$ip =$_SERVER['REMOTE_ADDR'];
$query = "SELECT * FROM visitor WHERE ip='$ip'";
$result=$conn->query($query);
if($result->num_rows == 0){
$query = "INSERT INTO visitor(ip)VALUES('$ip')";
$conn->query($query);
}
$pagePath = ucwords(substr($_SERVER['REDIRECT_URL'], strrpos($_SERVER['REDIRECT_URL'], '/') + 1));

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pagePath == 'home' ? 'Crete of Brand' : $pagePath ?></title>
    <link rel="stylesheet" href="<?php base_url('assets/css/style.css') ?>">
    <link rel="stylesheet" href="<?php base_url('assets/css/site_responsive.css')?>">
    <link rel="icon" href="<?php base_url('assets/images/logo-01.svg')?>">
