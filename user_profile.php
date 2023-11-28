<?php require_once "include/header.php"; ?>
<?php require_once "include/headerM.php"; ?>
<?php
if (!isset($_COOKIE[md5("name")])) {
    header('location:../loginSign.php?log=login');
}
?>
   


<?php require_once "include/footer.php"; ?>


