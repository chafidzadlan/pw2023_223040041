<?php 

session_start();
session_destroy();

header("Location: log-in.php");
setcookie('id', '', time() - 3600);
setcookie('uid', '', time() - 3600);

?>