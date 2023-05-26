<?php 
// cek login
session_start();

require 'backend/functions.php';

if(!isset($_SESSION['login']) && !isset($_SESSION['ids']) && !isset($_SESSION['rls'])) {
  header("Location: login.php");
  exit();
}

if($_SESSION['rls'] !== "u") {
  header("Location: dashboard.php");
  exit();
}

$login = false;
$pageName = "My Profile";
$name = "profile";

if (isset($_COOKIE['uid'])) {
  $login = cookieOpt($_COOKIE);
  $userDp = cekUser($_SESSION['ids']);
} elseif (isset($_SESSION['login'])) {
  $login = $_SESSION['login'];
  $userDp = cekUser($_SESSION['ids']);
}

$myuser = query("SELECT * FROM users WHERE id_users = '$_SESSION[ids]'")[0];

// cek apakah tombol berhasil di ubah atau tidak
if(isset($_POST["create"])) {
  if(edit($_POST, 'user', $_SESSION['ids']) > 0 ) {
    echo "
      <script>
        alert('data berhasil diubah😊');
      </script>
    ";
  } else {
    echo "
      <script>
        alert('data gagal diubah😢');
      </script>
    ";
  }
}

if(isset($_POST["changepass"])) {
  if(changePass($_POST) > 0) {
    echo "
      <script>
        alert('password berhasil diubah😊');
      </script>
    ";
  } else {
    echo "
      <script>
        alert('password gagal diubah😢');
      </script>
    ";
  }
}

require('views/profile.view.php');