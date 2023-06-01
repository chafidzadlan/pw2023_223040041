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

$pageName = "Atribut Form HTML";
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
            <li class="nav-item">
              <a href="#" class="nav-link">Alur Belajar</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">Bootcamp</a>
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

  <!-- Atribut Form HTML -->
  <section class="html">
    <div class="container">
      <h2>12. Atribut Form HTML</h2>
      <hr>
      <p>Form HTML memiliki beberapa atribut yang dapat digunakan untuk mengontrol perilaku dan penampilan form. Berikut adalah beberapa atribut yang umum digunakan pada elemen &lt;form&gt;:</p>
      <p>1. Atribut `action` digunakan untuk menentukan URL atau alamat tujuan di mana data form akan dikirimkan setelah pengguna mengklik tombol submit. Nilai atribut ini biasanya merupakan URL relatif atau absolut. Contoh: &lt;form action="/submit-form"&gt;.</p>
      <p>2. Atribut method digunakan untuk menentukan metode HTTP yang akan digunakan untuk mengirim data form ke server. Dua metode yang umum digunakan adalah GET dan POST.</p>
      <p>Metode `GET` mengirimkan data form sebagai parameter di URL. Ini cocok untuk mengambil data atau mengirimkan data yang tidak sensitif, tetapi perlu diingat bahwa data akan terlihat dalam URL dan dapat di-bookmark. <br>
        Metode `POST` mengirimkan data form dalam tubuh permintaan HTTP. Ini lebih cocok untuk mengirimkan data yang sensitif atau jumlah data yang besar, dan data tidak terlihat dalam URL. Contoh: &lt;form method="post"&gt;.</p>
      <p>3. Atribut `target` digunakan untuk menentukan di mana hasil respons dari pengiriman form akan ditampilkan. Nilai atribut ini dapat berupa `_self` (default) untuk menampilkan respons di jendela atau tab yang sama, atau `_blank` untuk membuka respons di jendela atau tab baru. Contoh: &lt;form target="_blank"&gt;.</p>
      <p>4. Atribut `autocomplete` digunakan untuk mengaktifkan atau menonaktifkan fitur pengisian otomatis pada elemen input dalam form. Nilai atribut ini dapat berupa `on` untuk mengaktifkan pengisian otomatis atau `off` untuk menonaktifkannya. Contoh: &lt;form autocomplete="off"&gt;.</p>
      <p>5. Atribut `enctype` digunakan untuk menentukan tipe encoding yang akan digunakan saat mengirimkan data form. Ini terutama digunakan ketika mengirimkan file atau data biner. Nilai atribut ini dapat berupa `application/x-www-form-urlencoded` (default) atau `multipart/form-data`. Contoh: &lt;form enctype="multipart/form-data"&gt;.</p>
      <p>6. Atribut `novalidate` digunakan untuk menonaktifkan validasi form HTML bawaan oleh browser. Jika ditetapkan, form akan mengirim data meskipun ada kesalahan validasi. Contoh: &lt;form novalidate&gt;.</p>
      <p>7. Atribut `name` digunakan untuk memberikan nama unik kepada form. Nama form ini akan digunakan dalam JavaScript atau CSS untuk mengakses atau merujuk ke form tersebut. Contoh: &lt;form name="myForm"&gt;.</p>
      <p>Itulah beberapa atribut umum pada elemen &lt;form&gt;. Atribut lainnya juga tersedia dan dapat digunakan sesuai kebutuhan dan spesifikasi form yang ingin Anda buat.</p>
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

