<?php 
// cek login
session_start();
require 'backend/functions.php';

if (!isset($_SESSION['login']) && !isset($_SESSION['ids']) && !isset($_SESSION['rls'])) {
  header("Location: login.php");
  exit();
}

if ($_SESSION['rls'] !== "a") {
  header("Location: profile.php");
  exit();
}

$login = false;
$pageName = "Admin Dashboard";
$name = "dashboard";

if (isset($_COOKIE['uid'])) {
  $login = cookieOpt($_COOKIE);
  $userDp = cekUser($_SESSION['ids']);
} elseif (isset($_SESSION['login'])) {
  $login = $_SESSION['login'];
  $userDp = cekUser($_SESSION['ids']);
}

// kirim data
if (isset($_POST['create'])) {
  // var_dump($_POST);
  // die;
  $editProfile = edit($_POST, 'user', $_SESSION['ids']);
  if (!$editProfile['error']) {
    echo "<script>
    setTimeout(function() {
        document.location.href='dashboard'
    }, 3000);
    </script>";
  }
}

$users = query("SELECT * FROM users");

require('views/dashboard.view.php');