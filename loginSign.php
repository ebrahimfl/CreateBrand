<?php require_once "include/header.php"; ?>

<?php require_once "include/headerM.php"; ?>


<?php



if (isset($_GET['log'])) {
    $log = $_GET['log'];
    if ($log =="login") {
        include_once("include/login.php");
    }elseif ($log=="signup") {
        include_once("include/signup.php");
    }elseif ($log=="logout") {
        include_once("include/logout.php");
    }elseif ($log=="ourproject") {
        include_once("include/ourproject.php");
    }elseif ($log=="mostpopularservices") {
        include_once("include/mostpopularservices.php");
    }elseif ($log=="figmaDesign") {
        include_once("include/figmaDesign.php");
    }elseif ($log=="htmlTemplate") {
        include_once("include/htmlTemplate.php");
    }elseif ($log=="pricing") {
        include_once("include/pricing.php");
    }elseif ($log=="descount") {
        include_once("include/descount.php");
    }elseif ($log=="costomarService") {
        include_once("include/costomarService.php");
    }elseif ($log=="ouradds") {
        include_once("include/ouradds.php");
    }elseif ($log=="useFullLink") {
        include_once("include/useFullLink.php");
    }
    
    
}else {
    header("location:index.php");
}

?>



<?php require_once "include/footer.php"; ?>