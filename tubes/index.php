<?php 
// cek login
session_start();

require 'backend/functions.php';

$login = false;
$pageName = "Halaman Utama";
$name = "index";

if(isset($_COOKIE['uid'])) {
  $login = cookieOpt($_COOKIE);
  $userDp = cekUser($_SESSION['ids']);
} elseif(isset($_SESSION['login'])) {
  $login = $_SESSION['login'];
  $userDp = cekUser($_SESSION['ids']);
}

// content
require('views/index.view.php');
