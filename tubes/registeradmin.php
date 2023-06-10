<?php
// cek login
session_start();

require 'backend/functions.php';

if(isset($_POST["register"])) {
  $register = registerAdmin($_POST);
}

$errors = [];
$pageName = "Register Admin";
$name = "registeradmin";

require('views/registeradmin.view.php');