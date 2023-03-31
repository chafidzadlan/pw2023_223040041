<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Masuk - Online Courses</title>

  <!-- FAVICON LINK -->
  <link rel="shortcut icon" href="img/accessibility-outline.svg" type="image/svg+xml">

  <!-- CSS LINK -->
  <link rel="stylesheet" href="css/login.css">
</head>
<body>
  
  <!-- HEADER -->

  <header>

    <div class="container">

      <a href="#" class="logo">
        <ion-icon name="accessibility-outline"></ion-icon>
      </a>

      <div class="navbar-wrapper">

        <button class="navbar-menu-btn" data-navbar-toggle-btn>
          <ion-icon name="menu-outline"></ion-icon>
        </button>

        <nav class="navbar" data-navbar>

          <ul class="navbar-list">

            <li class="nav-item">
              <a href="#" class="nav-link">Flash Sale</a>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link">Kelas</a>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link">Alur Belajar</a>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link">Bootcamp</a>
            </li>

          </ul>

          <a href="#register" class="btn btn-primary">Daftar</a>
          <a href="#" class="btn btn-primary">Masuk</a>

        </nav>

      </div>

    </div>

  </header>

  <!-- LOG IN -->
  <div class="login">
    <div class="container">

      <div class="wrapper">
        <div class="title">Masuk sebagai siswa</div>
        <div class="sub-title">Sudah punya akun? Yuk masuk untuk <br> mengakses beragam fitur</div>
        <form action="#">
          <div class="field">
            <input type="text" required>
            <label>Alamat Email</label>
          </div>
          <div class="field">
            <input type="password" required>
            <label>Password</label>
          </div>
          <div class="content">
            <div class="checkbox">
              <input type="checkbox" id="remember-me">
              <label for="remember-me">Ingat saya</label>
            </div>
            <div class="pass-link"><a href="#">Lupa Password?</a></div>
          </div>
          <div class="field">
            <button type="submit" class="btn btn-primary">Masuk</button>
          </div>
          <div class="signup-link">Belum punya akun? <a href="#">Daftar disini</a></div>
        </form>
      </div>

    </div>
  </div>
  

  <!-- FOOTER -->

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

      


  <!-- ION ICON -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
