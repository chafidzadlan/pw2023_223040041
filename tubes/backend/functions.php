<?php

// DATABASE
function dbConn() {
  $hostDB = "localhost";
  $userDB = "root";
  $passDB = "";
  $nameDB = "pw2023_223040041";
  return mysqli_connect($hostDB, $userDB, $passDB, $nameDB);
}

function base_url() {
  return 'http://localhost/pw2023_223040041/tubes/';
}

// QUERY
function query($query){
  $db = dbConn();
  
  $result = mysqli_query($db, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

// UPLOAD IMG
function uploadImg($jenis) {
  $nama_img = $_FILES['gambar']['name'];
  $type_img = $_FILES['gambar']['type'];
  $size_img = $_FILES['gambar']['size'];
  $error = $_FILES['gambar']['error'];
  $temp_img = $_FILES['gambar']['tmp_name'];

  // IMG NULL
  if($error == 4) {
    return 'dummy.jpg';
  }

  // EXT IMG
  $tipeImg = ['jpg', 'jpeg', 'png'];

  $ekstensi_img = explode('.', $nama_img);
  $ekstensi_img = end($ekstensi_img);
  $ekstensi_img = strtolower($ekstensi_img);

  if (!in_array($ekstensi_img, $tipeImg)) {
    echo "<script>
            alert('File yang dipilih bukan gambar!');
          </script>";
    return false;
  }

  // TYPE IMG
  if($type_img != 'image/jpeg' && $type_img != 'image/png') {
    echo "<script>
            alert('File yang dipilih bukan gambar!');
          </script>";
    return false;
  }

  // SIZE IMG 5MB
  if ($size_img > 5000000) {
    echo "<script>
            alert('File yang dipilih terlalu besar! (< 5Mb)');
          </script>";
    return false;
  }

  // LOLOS SEMUA
  // UPLOAD IMG
  $nama_img_baru = uniqid();
  $nama_img_baru .= '.';
  $nama_img_baru .= $ekstensi_img;
  if ($jenis === "user") {
    move_uploaded_file($temp_img, 'backend/image/user/' . $nama_img_baru);
  }

  return $nama_img_baru;

}

// EDIT
function edit($data, $jenis, $id) {
  $db = dbConn();

  $id = htmlspecialchars($id);
  $gambar_lama = htmlspecialchars($data['gambar_lama']);
  $name = htmlspecialchars($data['name']);
  $email = htmlspecialchars($data['email']);
  $password =  mysqli_real_escape_string($db, $data['password']);
  $address = htmlspecialchars($data['address']);
  $date = htmlspecialchars($data['date']);
  $gambar = uploadImg($jenis);

  if ($gambar == 'dummy.jpg') {
    $gambar = $gambar_lama;
  } else {
    if (isset($gambar['error']) && $gambar['error']) {
      return $gambar;
      exit();
    }
  }

  if($jenis === "user") {
    $name = strtolower(str_replace(' ', '', $name));
    $query = query("SELECT * FROM users WHERE id_users = $id")[0];

    if ($name !== $query['username']) {
      if (query("SELECT username, email FROM users WHERE username = '$name'")) {
        echo '<script>
                alert("Username sudah terdaftar");
              </script>';
        return false;
      }
    }
  
    // password
    if(empty($password)) {
      $password = $query['password'];
    } else {
      if(strlen($password) < 8) {
        echo "<script>
                alert('Password kurang dari 8 karakter!');
              </script>";
        return false;
      }
      $password = password_hash($password, PASSWORD_DEFAULT);
    }
  
    if(!empty(($data['id_roles']))) {
      $role = htmlspecialchars($data['id_roles']);
      $query = "UPDATE users t1
      JOIN roles t3 ON t1.id_roles = t3.id_roles
      SET  t1.username = '$name', t1.email = '$email', t1.password = '$password', t1.address = '$address', t1.tgl_lahir = '$date', t1.img = '$gambar', t1.id_roles = $role WHERE t1.id_users = '$id';
      ";
    } else {
      $query = "UPDATE users SET username = '$name', email = '$email', password = '$password', address = '$address', tgl_lahir = '$date', img = '$gambar' WHERE id_users = '$id'";
    }
  }
  mysqli_query($db, $query);

  return mysqli_affected_rows($db);
}

// SEARCH
function search($keyword) {
  $query = "SELECT * FROM users 
            WHERE 
            username LIKE '%$keyword%' OR 
            email LIKE '%$keyword%' OR 
            status LIKE '%$keyword%' OR 
            address LIKE '%$keyword%'";
  return query($query);
}

// COOKIE
function cookie($data) {
  $db = dbConn();

  $id = $data['id'];
  $uid = $data['uid'];

  // ambil username berdasarkan id
  $result = mysqli_query($db, "SELECT users.id_users, users.username, roles.jenis FROM users, roles WHERE users.id_roles = roles.id_roles AND users.id_users = '$id'");
  $hasil = mysqli_fetch_assoc($result);

  // cookie dan username
  if($uid === hash('sha256', $hasil['username'])) {
    $_SESSION['login'] = true;
    $_SESSION['ids'] = $hasil['id_users'];
    if($hasil['jenis'] === "admin") {
      $_SESSION['rls'] = "a";
    } else {
      $_SESSION['rls'] = "u";
    }
    header("Location: dashboard.php");
    exit();
  }
  return false;
}

// COOKIE OPT
function cookieOpt($data) {
  $db = dbConn();

  $id = $data['id'];
  $uid = $data['uid'];

  // ambil username berdasarkan id
  $result = mysqli_query($db, "SELECT users.id_users, users.username, roles.jenis FROM users, roles WHERE users.id_roles = roles.id_roles AND users.id_users = '$id'");
  $hasil = mysqli_fetch_assoc($result);

  // cookie dan username
  if($uid === hash('sha256', $hasil['username'])) {
    $_SESSION['login'] = true;
    $_SESSION['ids'] = $hasil['id_users'];
    if($hasil['jenis'] === "admin") {
      $_SESSION['rls'] = "a";
    } else {
      $_SESSION['rls'] = "u";
    }
    return true;
    exit();
  }
  return false;
}

// CEK USER
function cekUser($data) {
  return query("SELECT username, id_users FROM users WHERE id_users = '$data'")[0];
}

// RESET PASSWORD
function forgotPass($data) {
  $db = dbConn();

  $errors = [];
  $email = $data['email'];
  $_SESSION['email'] = $email;

  $query = "SELECT * FROM users WHERE email = '$email'";
  $result = mysqli_query($db, $query);

  // if query run
  if($result) {
    // if email matched
    if(mysqli_num_rows($result) > 0) {
      $code = rand(999999, 111111);
      $updateQuery = "UPDATE users SET code = $code WHERE email = '$email'";
      $updateResult = mysqli_query($db, $updateQuery);
      if($updateResult) {
        $subject = "Email Verification Code";
        $message = "our verification code is $code";
        if(mail($email, $subject, $message)) {
          $message = "We've sent a verification code to your Email <br> $email";

          $_SESSION['message'] = $message;
          header("Location: verifyEmail.php");
        } else {
          $errors['otp_errors'] = 'Failed while sending code!';
        }
      } else {
        $errors['db_errors'] = "Failed while inserting data into database!";
      }
    } else {
      $errors['invalidEmail'] = "Invalid Email Address";
    }
  } else {
    $errors['db_error'] = "Failed while checking email from database!";
  }
}

// RESET PASSWORD
function resetPass($data) {
  $db = dbConn();

  $password = mysqli_real_escape_string($db, $data['password']);
  $confirmPassword = mysqli_real_escape_string($db, $data['confirmPassword']);

  $errors = [];

  if(strlen($_POST['password']) < 8) {
    $errors['password_error'] = 'Use 8 or more characters with a mix of letters, numbers & symbols';
  } else {
    // if password not matched so
    if($password != $confirmPassword) {
      $errors['password_error'] = 'Password not matched';
    } else {
      $email = $_SESSION['email'];
      $newPassword = password_hash($password, PASSWORD_DEFAULT);  
      $query = "UPDATE users SET password = '$newPassword' WHERE email = '$email'";
      $result = mysqli_query($db, $query) or die("Query Failed");
      header("Location: login.php");
    }
  }
}

// CHANGE PASSWORD
function changePass($data) {
  $db = dbConn();

  $id = htmlspecialchars($data['ids']);
  $prev = mysqli_real_escape_string($db, $data['prevpassword']);
  $new = mysqli_real_escape_string($db, $data['newpassword']);

  if($query = query("SELECT password FROM users WHERE id_users = $id")) {
    $query = $query[0];

    if (password_verify($prev, $query['password'])) {
      if ($prev === $new) {
        echo "<script>
                alert('password yang Anda masukkan sama dengan password Anda sebelumnya.');
              </s>";
      }
      if (strlen($new) < 8) {
        echo "<script>
                alert('Kata sandi Anda terlalu pendek.');
              </script>";
      }
      $password = password_hash($new, PASSWORD_DEFAULT);
      $update_query = "UPDATE users SET password = '$password' WHERE id_users = '$id'";
      mysqli_query($db, $update_query);
    
      return mysqli_affected_rows($db);
    }
  }
}

// LOGIN
function login($data) {
  $db = dbConn();

  $email = htmlspecialchars($data['email']);
  $password =  mysqli_real_escape_string($db, $data['password']);

  $emailQuery = "SELECT users.id_users, users.password, users.username, users.email , roles.jenis FROM users, roles WHERE users.id_roles = roles.id_roles AND users.email = '$email'";

  if($query = query($emailQuery)) {
    $query = $query[0];

    // cek password
    if(password_verify($password, $query['password'])) {
      // set session
      $_SESSION['ids'] = $query['id_users'];
      $_SESSION['login'] = true;

      // remember me
      if(isset($data['remember'])) {
        // buat cookie
        setcookie('id', $query['id_users'], time() + 2678400);
        setcookie('uid', hash('sha256', $query['username']), time() + 2678400);
      }

      if($query['jenis'] === "admin") {
        $_SESSION['rls'] = "a";
        header("Location: dashboard.php");
        exit;
      } else {
        $_SESSION['rls'] = "u";
        header("Location: index.php");
      }
    }

    $passwordQuery = "SELECT users.id_users, users.password, users.username, users.email , roles.jenis FROM users, roles WHERE users.id_roles = roles.id_roles AND users.email = '$email' AND users.password = '$password'";
    $passwordResult = mysqli_query($db, $passwordQuery);
    if(mysqli_num_rows($passwordResult) > 0) {
      $fetchInfo = mysqli_fetch_assoc($passwordResult);
      $status = $fetchInfo['status'];
      $name = $fetchInfo['username'];
      $_SESSION['name'] = $name;
      $_SESSION['email'] = $fetchInfo['email'];
      $_SESSION['password'] = $fetchInfo['password'];
      if($status === 'Verified') {
        header("Location: index.php");
      } else {
        echo "<script>
                alert('It's look like you haven't still verify your email $email');
              </script>";
        header("Location: otp.php");
      }
    } else {
      echo "<script>
              alert('Password did not matched');
            </script>";
    }
  }
}

// REGISTER
function register($data) {
  $db = dbConn();

  $username = strtolower(stripslashes($data["username"]));
  $email = htmlspecialchars($data['email']);
  $password1 = mysqli_real_escape_string($db, $data['password1']);
  $password2 = mysqli_real_escape_string($db, $data['password2']);
  $address = htmlspecialchars($data['address']);
  $date = htmlspecialchars($data['date']);

  // generate a random code
  $code = rand(999999, 111111);
  // set status
  $status = "Not Verified";

  if (empty($username) || empty($password1) || empty($password2) || empty($email) || empty($address) || empty($date)) {
    echo '<script>
            alert("Field jangan kosong!");
          </script>';
    return false;
  }

  // cek email sudah ada atau belum
  $result = mysqli_query($db, "SELECT username, email FROM users WHERE email = '$email'");
  if (mysqli_fetch_assoc($result)) {
    echo '<script>
            alert("Email sudah terdaftar");
          </script>';
    return false;
  }

  // min. password
  if(strlen($password1) < 8) {
    echo "<script>
            alert('Password kurang dari 8 karakter!');
          </script>";
    return false;
  }

  // password1 = password2

  if ($password1 !== $password2) {
    echo '<script>
            alert("konfirmasi password tidak sesuai!");
          </script>';
    return false;
  }

  // lolos
  if(empty($gambar)) {
    $gambar = 'dummy.jpg';
  }

    $password = password_hash($password1, PASSWORD_DEFAULT);
    $query = "INSERT INTO users VALUES (null, '$username', '$email', '$password', '$address', '$date', '$gambar', '$code', '$status', 2)";
    $result = mysqli_query($db, $query);

    // Send Verification Code In Gmail
    if($result) {
      $subject = 'Email Verification Code';
      $message = "our verification code is $code";
      $sender = 'From: chafidz0505@gmail.com';

      if(mail($email, $subject, $message, $sender)) {
        $message = "We've sent a verification code to your Email <br> $email";

        $_SESSION['message'] = $message;
        header("Location: otp.php");
      } else {
        $errors['otp_errors'] = 'Failed while sending code!';
      }
    } else {
      $errors['db_errors'] = "Failed while inserting data into database!";
    }
}

// Verify Email
function verifyEmail($data) {
  $db = dbConn();

  $errors = [];
  $_SESSION['message'] = "";
  $OTPverify = mysqli_real_escape_string($db, $data['OTPverify']);
  $query = "SELECT * FROM users WHERE code = $OTPverify";
  $result = mysqli_query($db, $query);
  
  if($result) {
    if(mysqli_num_rows($result) > 0) {
      $newQuery = "UPDATE users SET code = 0";
      $run = mysqli_query($db, $newQuery);
      header("Location: resetPass.php");
    } else {
      $errors['verification_error'] = "Invalid Verification Code";
    }
  } else {
    $errors['db_error'] = "Failed while checking Verification Code from database!";
  }
}

// OTP
function otp($data) {
  $db = dbConn();

  $errors = [];
  $_SESSION['message'] = "";
  $otp = mysqli_real_escape_string($db, $data['otp']);
  $query = "SELECT * FROM users WHERE code = $otp";
  $result = mysqli_query($db, $query);

  if (mysqli_num_rows($result) > 0) {
    $fetch_data = mysqli_fetch_assoc($result);
    $fetch_code = $fetch_data['code'];

    $update_status = "Verified";
    $update_code = 0;

    $update_query = "UPDATE users SET status = '$update_status' , code = $update_code WHERE code = $fetch_code";
    $update_result = mysqli_query($db, $update_query);

    if ($update_result) {
      header('Location: login.php');
    } else {
      $errors['db_error'] = "Failed To Insering Data In Database!";
    }
  } else {
     $errors['otp_error'] = "You enter invalid verification code!";
  } 
}

?>