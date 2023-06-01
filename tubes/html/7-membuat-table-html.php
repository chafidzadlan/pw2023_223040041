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

$pageName = "Membuat Table HTML";
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

  <!-- Membuat Table HTML -->
  <section class="html">
    <div class="container">
      <h2>7. Membuat Table HTML</h2>
      <hr>
      <p>Untuk membuat tabel dalam HTML, Anda dapat menggunakan elemen &lt;table&gt;, &lt;tr&gt;, &lt;th&gt;, dan &lt;td&gt;. Berikut adalah contoh kode untuk membuat tabel sederhana dengan dua baris dan dua kolom:</p>
<pre>
&lt;table&gt;
  &lt;tr&gt;
    &lt;th&gt;Nama&lt;/th&gt;
    &lt;th&gt;Usia&lt;/th&gt;
  &lt;/tr&gt;
  &lt;tr&gt;
    &lt;td&gt;John&lt;/td&gt;
    &lt;td&gt;25&lt;/td&gt;
  &lt;/tr&gt;
  &lt;tr&gt;
    &lt;td&gt;Jane&lt;/td&gt;
    &lt;td&gt;30&lt;/td&gt;
  &lt;/tr&gt;
&lt;/table&gt;
</pre>
      <p>Dalam contoh di atas, elemen &lt;table&gt; digunakan untuk menandai awal dan akhir tabel. Elemen &lt;tr&gt; digunakan untuk membuat baris dalam tabel. Elemen &lt;th&gt; digunakan untuk membuat sel header (judul kolom), sedangkan elemen &lt;td&gt; digunakan untuk membuat sel data (isi tabel).</p>
      <p>Hasilnya akan menjadi tabel dengan dua kolom: "Nama" dan "Usia", serta dua baris data dengan nama dan usia yang sesuai.</p>
      <p>Anda dapat menambahkan lebih banyak baris dan kolom ke tabel dengan menambahkan elemen &lt;tr&gt;, &lt;th&gt;, dan &lt;td&gt; tambahan.</p>
      <p>Misalnya, untuk menambahkan kolom "Kota" ke tabel di atas, Anda dapat memodifikasinya seperti ini:</p>
<pre>
&lt;table&gt;
  &lt;tr&gt;
    &lt;th&gt;Nama&lt;/th&gt;
    &lt;th&gt;Usia&lt;/th&gt;
    &lt;th&gt;Kota&lt;/th&gt;
  &lt;/tr&gt;
  &lt;tr&gt;
    &lt;td&gt;John&lt;/td&gt;
    &lt;td&gt;25&lt;/td&gt;
    &lt;td&gt;New York&lt;/td&gt;
  &lt;/tr&gt;
  &lt;tr&gt;
    &lt;td&gt;Jane&lt;/td&gt;
    &lt;td&gt;30&lt;/td&gt;
    &lt;td&gt;London&lt;/td&gt;
  &lt;/tr&gt;
&lt;/table&gt;
</pre>
      <p>Hasilnya akan menjadi tabel dengan tiga kolom: "Nama", "Usia", dan "Kota". Pastikan untuk menyesuaikan konten dan jumlah baris/kolom sesuai dengan kebutuhan Anda. Anda juga dapat mengatur tampilan tabel dengan menggunakan atribut atau CSS untuk mengatur properti seperti lebar kolom, warna latar belakang, dan sebagainya.</p>
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

