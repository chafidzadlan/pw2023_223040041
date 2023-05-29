<?php 

// cek login
session_start();

require 'backend/functions.php';

$pageName = "Verify Email";
$name = "verifyEmail";
$errors = [];

// cek cookie 
if (isset($_COOKIE['id']) && isset($_COOKIE['uid'])) {
  cookie($_COOKIE);
}

if (isset($_SESSION['login']) && isset($_SESSION['ids']) && isset($_SESSION['rls'])) {
  header("Location: dashboard.php");
  exit();
}

if(isset($_POST['verifyEmail'])){
  $verify = verifyEmail($_POST);
}

require("views/verifyEmail.view.php");