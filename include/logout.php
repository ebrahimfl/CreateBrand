<?php

setcookie(md5('name'),"id", time() - (86400 * 100), "/");
header("location: loginSign.php?log=login");


?>