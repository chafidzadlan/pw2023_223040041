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

$pageName = "Mengenal Heading HTML";
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

  <!-- Mengenal Heading HTML -->
  <section class="html">
    <div class="container">
      <h2>4. Mengenal Heading HTML</h2>
      <hr>
      <p>Pada HTML, heading digunakan untuk menandai judul atau kepala bagian dari sebuah dokumen. Heading dibedakan dalam tingkatan, mulai dari &lt;h1&gt; hingga &lt;h6&gt;, dengan &lt;h1&gt; menjadi heading terbesar dan &lt;h6&gt; menjadi heading terkecil. Penggunaan heading yang tepat membantu dalam struktur dan hierarki dokumen.</p>
      <p>Berikut adalah contoh penggunaan heading dalam HTML:</p>
<pre>
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
  &lt;title&gt;Judul Halaman&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
  &lt;h1&gt;Heading 1&lt;/h1&gt;
  &lt;h2&gt;Heading 2&lt;/h2&gt;
  &lt;h3&gt;Heading 3&lt;/h3&gt;
  &lt;h4&gt;Heading 4&lt;/h4&gt;
  &lt;h5&gt;Heading 5&lt;/h5&gt;
  &lt;h6&gt;Heading 6&lt;/h6&gt;
&lt;/body&gt;
&lt;/html&gt;
</pre>
    <p>Pada contoh di atas, &lt;h1&gt; adalah heading terbesar yang menandai judul utama atau kepala halaman. &lt;h2&gt; digunakan untuk judul bagian atau sub-bagian yang penting, dan seterusnya hingga &lt;h6&gt;.</p>
    <p>Setiap heading memiliki gaya default yang berbeda dalam browser, biasanya dengan ukuran, bobot teks, dan margin yang berbeda. Namun, gaya ini dapat diubah dengan menggunakan CSS untuk mencapai penampilan yang diinginkan.</p>
    <p>Penting untuk menggunakan heading secara semantik dan sesuai dengan hierarki informasi di dalam halaman web Anda. Ini membantu dalam aksesibilitas, SEO, dan memahami struktur konten oleh mesin pencari dan pembaca layar.</p>
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

