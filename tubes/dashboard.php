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
        document.location.href='dashboard.php'
    }, 3000);
    </script>";
  }
}

// pagination
// konfigurasi
$jumlahDataPerHalaman = 5;
$jumlahData = count(query("SELECT * FROM users"));
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
$halamanAktif = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1;
$awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;

$users = query("SELECT * FROM users LIMIT $awalData, $jumlahDataPerHalaman");

// tombol search ditekan
if(isset($_POST['search'])) {
  $users = search($_POST["keyword"]);
}

require('views/dashboard.view.php');