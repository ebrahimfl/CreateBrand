<?php

if (!isset($_COOKIE[md5("name")])) {
    header('location:loginSign.php?log=login');
}


?>
