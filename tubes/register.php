<?php
// cek login
session_start();

require 'backend/functions.php';

if(isset($_POST["register"])) {
  $register = register($_POST);
}

$errors = [];
$pageName = "Register";
$name = "register";

require('views/register.view.php');