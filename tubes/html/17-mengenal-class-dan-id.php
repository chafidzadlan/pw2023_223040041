<?php

// cek login
session_start();

require '../backend/functions.php';

if(!isset($_SESSION['login']) && !isset($_SESSION['ids']) && !isset($_SESSION['rls'])) {
  header("Location: log-in.php");
  exit();
}

if($_SESSION['rls'] !== "u") {
  header("Location: dashboard.php");
  exit();
}

$pageName = "Mengenal Class dan Id";
$name = "html";
$login = true;

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> <?= $pageName; ?> | Online Courses</title>

  <!-- FAVICON -->
  <link rel="icon" type="image/svg+xml" href="img/nav-logo.svg" >

  <!-- CSS -->
  <link rel="stylesheet" href="../css/<?= $name; ?>.css">
  <link rel="stylesheet" href="../css/custom.css">

  <!-- GOOGLE FONT -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <!-- JS -->
  <script src="../js/sweetalert2/sweetalert2.all.min.js"></script>
  <script src="../js/jquery/jquery-3.7.0.min.js"></script>
  <script src="../js/custom.js"></script>
  
</head>

<body>
  <header>
    <div class="container">
      <a href="index.php" class="logo">
        <ion-icon name="accessibility-outline"></ion-icon>
      </a>
      <div class="navbar-wrapper">
        <button class="navbar-menu-btn" data-navbar-toggle-btn>
          <ion-icon name="menu-outline"></ion-icon>
        </button>
        <nav class="navbar" data-navbar>
          <ul class="navbar-list">
            <li class="nav-item">
              <a href="../kelas.php" class="nav-link">Kelas</a>
            </li>
          </ul>
          <?php if ($login) { ?>
            <div class="dropdown">
              <button class="btn btn-outline-light dropdown-toggle w-100" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <ion-icon name="person-circle" class="ion-icon"></ion-icon> 
              </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="../dashboard.php">Profile</a></li>
                  <li><a class="dropdown-item" href="../logout.php">Logout</a></li>
                </ul>
            </div>
          <?php } else { ?>
            <a href="register.php" class="btn btn-primary">Daftar</a>
            <a href="log-in.php" class="btn btn-primary">Masuk</a>
          <?php } ?>
        </nav>
      </div>
    </div>
  </header>

  <!-- Mengenal Class dan Id -->
  <section class="html">
    <div class="container">
      <h2>17. Mengenal Class dan Id</h2>
      <hr>
      <p>Kelas (Class) dan ID adalah atribut yang digunakan dalam HTML dan CSS untuk memberikan identifikasi atau penandaan pada elemen-elemen HTML. Ini memungkinkan Anda untuk mengatur gaya dan menerapkan aturan CSS tertentu untuk elemen-elemen tersebut. Berikut adalah penjelasan lebih lanjut tentang kelas dan ID:</p>
      <p>
        1. Kelas (Class): <br>
        - Kelas (class) digunakan untuk mengelompokkan beberapa elemen HTML bersama-sama sehingga dapat diberi gaya dengan CSS yang sama. <br>
        - Satu elemen HTML dapat memiliki beberapa kelas dan elemen-elemen yang berbeda dapat menggunakan kelas yang sama. <br>
        - Untuk menetapkan kelas ke suatu elemen, Anda perlu menambahkan atribut `class` dengan nilai kelas yang diinginkan. Contoh: &lt;div class="container"&gt;. <br>
        - Dalam CSS, untuk menerapkan aturan gaya pada elemen dengan kelas tertentu, Anda menggunakan pemilih kelas (class selector). Contoh: `.container { color: red; }`.
      </p>
      <p>
        2. ID: <br>
        - ID digunakan untuk memberikan identifikasi unik kepada suatu elemen HTML tertentu. <br>
        - Setiap elemen HTML hanya boleh memiliki satu ID yang unik. <br>
        - Untuk menetapkan ID ke suatu elemen, Anda perlu menambahkan atribut `id` dengan nilai ID yang diinginkan. Contoh: &lt;h1 id="judul"&gt;. <br>
        - Dalam CSS, untuk menerapkan aturan gaya pada elemen dengan ID tertentu, Anda menggunakan pemilih ID (ID selector). Contoh: `#judul { font-size: 24px; }`.
      </p>
      <p>Perbedaan antara kelas dan ID terletak pada penggunaan dan keunikan identifikasi. Kelas digunakan untuk mengelompokkan elemen-elemen yang serupa, sedangkan ID digunakan untuk mengidentifikasi elemen secara unik. Dalam CSS, pemilih kelas (class selector) diawali dengan titik (`.`), sedangkan pemilih ID (ID selector) diawali dengan tanda pagar (`#`).</p>
      <p>Dalam prakteknya, kelas sering digunakan untuk gaya yang ingin diterapkan ke beberapa elemen sekaligus, sedangkan ID digunakan untuk elemen dengan kebutuhan gaya yang unik atau perilaku khusus yang dihubungkan melalui JavaScript.</p>
    </div>
    <div class="html-list">
      <h2>HTML</h2>
      <hr>
      <ul>
        <li><a href="1-pengertian-html.php">#1. Pengertian HTML</a></li>
        <li><a href="2-memilih-text-editor.php">#2. Memilih Text Editor</a></li>
        <li><a href="3-mengenal-tag,elemen,dan-atribut.php">#3. Mengenal Tag, Element dan Atribut</a></li>
        <li><a href="4-mengenal-heading-html,php">#4. Mengenal Heading HTML</a></li>
        <li><a href="5-format-text-html.php">#5. Format Text HTML</a></li>
        <li><a href="6-paragraf-html.php">#6. Paragraf HTML</a></li>
        <li><a href="7-membuat-table-html.php">#7. Membuat Table HTML</a></li>
        <li><a href="8-link-hyperlink-html.php">#8. Link / Hyperlink HTML</a></li>
        <li><a href="9-list-html.php">#9. List HTML</a></li>
        <li><a href="10-format-code.php">#10. Format Code</a></li>
        <li><a href="11-form-html.php">#11. Form HTML</a></li>
        <li><a href="12-atribut-form-html.php">#12. Atribut Form HTML</a></li>
        <li><a href="13-simbol-html.php">#13. Simbol HTML</a></li>
        <li><a href="14-menampilkan-gambar-html.php">#14. Menampilkan Gambar HTML</a></li>
        <li><a href="15-iframe-html.php">#15. Iframe HTML</a></li>
        <li><a href="16-menghubungkan-html-dan-css.php">#16. Menghubungkan HTML dan CSS</a></li>
        <li><a href="17-mengenal-class-dan-id.php">#17. Mengenal Class dan Id</a></li>
        <li><a href="18-baris-baru-br.php">#18. Baris Baru (Tag BR)</a></li>
      </ul>
  </div>
  </section>

  <section class="poin">
    
  </section>

  

  <footer>
    <div class="footer-top">
      <div class="container">
        <div class="footer-brand">
          <a href="#" class="logo">
            <ion-icon name="accessibility-outline"></ion-icon>
          </a>
          <p class="footer-text">Belajar coding dengan kurikulum industri. <br> Ambil sertifikasi serta kesempatan kerja <br> di berbagai perusahaan.</p>
          <ul class="social-list">
            <li>
              <a href="https://github.com/chafidz05" class="social-link">
                <ion-icon name="logo-github"></ion-icon>
              </a>
            </li>
            <li>
              <a href="https://instagram.com/chafidz05" class="social-link">
                <ion-icon name="logo-instagram"></ion-icon>
              </a>
            </li>
            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-youtube"></ion-icon>
              </a>
            </li>
            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
            </li>
          </ul>
        </div>
        <div class="footer-link-box">
          <ul class="footer-link-list">
            <li>
              <h3 class="h4 link-title">Company</h3>
            </li>
            <li>
              <a href="#" class="footer-link">Karir</a>
            </li>
            <li>
              <a href="#" class="footer-link">Tentang Kami</a>
            </li>
            <li>
              <a href="#" class="footer-link">Partner</a>
            </li>
            <li>
              <a href="#" class="footer-link">Blog</a>
            </li>
          </ul>
          <ul class="footer-link-list">
            <li>
              <h3 class="h4 link-title">Layanan</h3>
            </li>
            <li>
              <a href="#" class="footer-link">Kelas</a>
            </li>
            <li>
              <a href="#" class="footer-link">Beasiswa</a>
            </li>
            <li>
              <a href="#" class="footer-link">Challenge</a>
            </li>
            <li>
              <a href="#" class="footer-link">Webinar</a>
            </li>
             <li>
              <a href="#" class="footer-link">Paket</a>
            </li>
          </ul>
          <ul class="footer-link-list">
            <li>
              <h3 class="h4 link-title">Bantuan dan Panduan</h3>
            </li>
            <li>
              <a href="#" class="footer-link">Syarat dan ketentuan</a>
            </li>
            <li>
              <a href="#" class="footer-link">Kebijakan Privasi</a>
            </li>
            <li>
              <a href="#" class="footer-link">Bantuan</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <p class="copyright">
        &copy; 2023 <a href="#">chafidz</a>
      </p>
    </div>
  </footer>

  <!-- ION ICON LINK -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</html>

