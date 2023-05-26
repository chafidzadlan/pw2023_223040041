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

// TIME TAMBAH SQL
function timeTambahSQL($tanggal, $tambah) {
  $date = date_create($tanggal);
  date_add($date, date_interval_create_from_date_string($tambah));
  return date_format($date, "Y-m-d H:i:s");
}

// TOKEN RESET PASSWORD
function tokenResetPass($data) {
  $db = dbConn();

  $username = htmlspecialchars(strtolower(str_replace(' ', '', $data['username'])));
  $email = htmlspecialchars($data['email']);
  $date = date("Y-m-d H:i:s");
  $date24 = timeTambahSQL($date, "24 Hours");

  if($query = query("SELECT username, email, id_users FROM users WHERE username = '$username' AND email = '$email'")) {
    $iduser = $query[0]['id_users'];
    if(!query("SELECT * FROM id_users = '$iduser' AND expired > '$date'")) {
      // hapus uniqnya
      mysqli_query($db, "DELETE FROM user_token WHERE id_users = '$iduser' AND expired < '$date'");

      // buat uniqurl
      $url = uniqid();
      mysqli_query($db, "INSERT INTO user_token VALUES('$iduser', '$url', '$date24')");
      $url = query("SELECT token FROM user_token WHERE id_users = '$iduser'")[0];
      $url = base_url() . "forgot?reset=" . $url['token'];
      echo "</script>
              alert('Link untuk mengganti password telah dikirim ke email anda.');
            </script>";
    } else {
      echo "</script>
              alert('Anda sudah membuat request.');
            </script>";
    }
  } else {
    echo "</script>
              alert('Username atau email salah.');
            </script>";
  }
}

// RESET PASSWORD
function resetPass($data, $token) {
  $db = dbConn();

  $token = htmlspecialchars($token);
  $password1 = mysqli_real_escape_string($db, $data['password1']);
  $password2 = mysqli_real_escape_string($db, $data['password2']);

  // cek profile
  if(!$profile = query("SELECT id_users FROM user_token WHERE token = '$token'")[0]) {
    header("Location: login.php");
    exit();
  }

  // min. password

  if (strlen($password1) < 8) {
    echo "</script>
            alert('Password minimal 8 karakter');
          </script>";
    exit();
  }

  if ($password1 !== $password2) {
    echo "</script>
            alert('Password tidak sesuai');
          </script>";
    exit();
  }

  // password
  $password = password_hash($password1, PASSWORD_DEFAULT);
  $query = "UPDATE users SET password = '$password' WHERE id_users = '$profile[id_users]'";
  mysqli_query($db, $query);

  // hapus
  mysqli_query($db, "DELETE FROM user_token WHERE token = '$token'");

  echo "</script>
          alert('success');
        </script>";
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

  $username = htmlspecialchars(strtolower(str_replace(' ', '', $data['username'])));
  $password =  mysqli_real_escape_string($db, $data['password']);

  if($query = query("SELECT users.id_users, users.password, users.username, users.email , roles.jenis FROM users,  roles WHERE users.id_roles = roles.id_roles AND users.username = '$username'")) {
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
  }
  echo "<script>
          alert('Username atau Password salah.');
        </script>";
  return false;
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

  if (empty($username) || empty($password1) || empty($password2) || empty($email) || empty($address) || empty($date)) {
    echo '<script>
            alert("Field jangan kosong!");
          </script>';
    return false;
  }

  // cek username sudah ada atau belum
  $result = mysqli_query($db, "SELECT username, email FROM users WHERE username = '$username'");
  if (mysqli_fetch_assoc($result)) {
    echo '<script>
            alert("Username sudah terdaftar");
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
  $query = "INSERT INTO users VALUES (null, '$username', '$email', '$password', '$address', '$date', '$gambar', 2)";
  mysqli_query($db, $query);

  return mysqli_affected_rows($db);
}

?>