<?php
session_start();
//unset($_SESSION['USER_LOGIN']);
unset($_SESSION['UID']);
header('location:index.php');
die();

?>