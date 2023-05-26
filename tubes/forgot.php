<?php 

// cek login
session_start();

require 'backend/functions.php';

$pageName = "Forgot Password";
$name = "forgot";

// cek cookie 
if (isset($_COOKIE['id']) && isset($_COOKIE['uid'])) {
  cookie($_COOKIE);
}

if (isset($_SESSION['login']) && isset($_SESSION['ids']) && isset($_SESSION['rls'])) {
  header("Location: dashboard");
  exit();
}

if(isset($_POST['change'])) {
  $email = $_POST['email'];

  // periksa apakah email ada di database
  $query = "SELECT * FROM users WHERE email = '$email'";
  $result = mysqli_query($db, $query);
  $row = mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result) == 1) {
    // Generate token reset password
    $token = bin2hex(random_bytes(32));

    // Simpan token di database
    $query = "UPDATE users SET token = '$token' WHERE email = '$email'";
    mysqli_query($db, $query);

    // Kirim email dengan tautan reset password
    $resetLink = "http://localhost/forgot.php?email=" . urlencode($email) . "&token=" . urlencode($token);
    mail($email, "Reset Password", "Silahkan kunjungi tautan ini untuk mereset password anda: " . $resetLink);

    echo "<script>
            alert('Email dengan petunjuk reset password telah dikirim ke alamat email anda.'); 
          </script>";
  } else {
    echo "<script>
            alert('Email tidak ditemukan dalam database');
          </script>";
  }
}

require('views/forgot.view.php'); 