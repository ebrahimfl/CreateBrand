<?php require_once "include/header.php"; ?>
<?php require_once "include/headerM.php"; ?>
<?php
if (!isset($_COOKIE[md5("ad_name")])) {
    header("location: index.php");
}
?>





<?php require_once "include/footer.php"; ?>