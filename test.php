<?php
// gurutto purnno code
$page = substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'], 'useer_profile/php/core.php') );
$remove =rtrim($_SERVER['SCRIPT_NAME'], $page);
$servarname = $_SERVER['SERVER_NAME'].$remove."/";