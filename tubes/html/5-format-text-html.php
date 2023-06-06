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

$pageName = "Format Text HTML";
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

  <!-- Format Text HTML -->
  <section class="html">
    <div class="container">
      <h2>5. Format Text HTML</h2>
      <hr>
      <p>Dalam HTML, ada beberapa elemen dan atribut yang dapat digunakan untuk memformat teks dan mengubah tampilan visualnya. Berikut adalah beberapa contoh format teks yang umum digunakan dalam HTML:</p>
      <p>1. Paragraf: Elemen &lt;p&gt; digunakan untuk mengelompokkan teks dalam sebuah paragraf. Ini akan memberikan jarak antara paragraf secara default.</p>
<pre>
&lt;p&gt;Ini adalah contoh paragraf&lt;/p&gt;
</pre>
      <p>2. Judul: Elemen heading &lt;h1&gt; hingga &lt;h6&gt; digunakan untuk menandai judul atau kepala bagian. Masing-masing elemen memiliki ukuran yang berbeda, dengan &lt;h1&gt; sebagai heading terbesar dan &lt;h6&gt; sebagai heading terkecil.</p>
<pre>
&lt;h1&gt;Judul Heading 1&lt;/h1&gt;
&lt;h2&gt;Judul Heading 2&lt;/h2&gt;
</pre>
      <p>3. Teks Tebal: Elemen &lt;strong&gt; atau &lt;b&gt; digunakan untuk membuat teks menjadi tebal.</p>
<pre>
&lt;p&gt;&lt;strong&gt;Teks Tebal&lt;/strong&gt;&lt;/p&gt;
</pre>
      <p>4. Teks Miring: Elemen &lt;em&gt; atau &lt;i&gt; digunakan untuk membuat teks menjadi miring.</p>
<pre>
&lt;p&gt;&lt;em&gt;Teks Miring&lt;/em&gt;&lt;/p&gt;
</pre>
      <p>5. Teks Garis Bawah: Elemen &lt;u&gt; digunakan untuk memberikan garis bawah pada teks.</p>
<pre>
&lt;p&gt;&lt;u&gt;Teks dengan Garis Bawah&lt;/u&gt;&lt;/p&gt;
</pre>
      <p>6. Teks Garis Tengah: Elemen &lt;s&gt; atau &lt;del&gt; digunakan untuk memberikan garis tengah pada teks.</p>
<pre>
&lt;p&gt;&lt;s&gt;Teks dengan Garis Tengah&lt;/s&gt;&lt;/p&gt;
</pre>
      <p>7. Teks Super/Subscript: Elemen &lt;sup&gt; dan &lt;sub&gt; digunakan untuk membuat teks menjadi superskrip atau subscript.</p>
<pre>
&lt;p&gt;H&lt;sub&gt;2&lt;/sub&gt;0&lt;/p&gt;
&lt;p&gt;x&lt;sub&gt;2&lt;/sub&gt;&lt;/p&gt;
</pre>
      <p>8. Teks Rata Kiri/Kanan/Tengah: Atribut `align` (dalam HTML4) atau properti CSS `text-align` (dalam HTML5) digunakan untuk mengatur perataan teks.</p>
<pre>
&lt;p align="left"&gt;Teks rata kiri&lt;/p&gt;
&lt;p align="right"&gt;Teks rata kanan&lt;/p&gt;
&lt;p align="center"&gt;Teks rata tengah&lt;/p&gt;
</pre>
      <p>Itu hanya beberapa contoh format teks yang umum digunakan dalam HTML. Ada lebih banyak elemen dan atribut yang dapat digunakan untuk mencapai efek visual yang lebih kompleks. Selain itu, gaya teks juga dapat dikontrol dengan menggunakan CSS.</p>
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

