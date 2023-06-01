<?php 

// cek login
session_start();

require 'backend/functions.php';

$pageName = "Kelas";
$name = "kelas";
$login = true;

if (!isset($_SESSION['login']) && !isset($_SESSION['ids']) && !isset($_SESSION['rls'])) {
  header("Location: log-in.php");
  exit();
}

// cek cookie
if(isset($_COOKIE["id"]) && isset($_COOKIE['uid'])) {
  cookie($_COOKIE);
}


require('views/kelas.view.php'); 