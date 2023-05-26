<?php
// cek login
session_start();

require 'backend/functions.php';

if(isset($_POST["register"])) {
  if(register($_POST) > 0) {
    echo "<script>
            alert('user baru berhasil ditambahkan!');
          </script>";
  } else {
    echo mysqli_error($db);
  }
}

$pageName = "Register";
$name = "register";

require('views/register.view.php');