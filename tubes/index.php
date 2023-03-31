<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Online Courses</title>

  <!-- 
    - favicon link
  -->
  <link rel="shortcut icon" href="img/accessibility-outline.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="css/style.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>

<body id="top">

  <!-- 
    - #HEADER
  -->

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

  <main>

    <article>

      <!-- 
        - #HERO
      -->

      <section class="hero" id="home">
        <div class="container">

          <div class="hero-content">

            <h1 class="h1 hero-title">Mulai Belajar & siap jadi TALENTA DIGITAL</h1>

            <p class="hero-text">
            Tingkatkan keterampilan digital, tambah portofolio, dan siapkan karir kamu untuk jadi talenta digital handal.
            </p>

            <a href="#" class="btn btn-primary">Mulai Sekarang</a>

          </div>

        </div>

        <img src="img/hero-banner.png" alt="shape" class="shape-content">
      </section>


      <!-- 
        - #ABOUT
      -->

      <section class="about" id="about">
        <div class="container">

          <div class="about-top">

            <h2 class="h2 section-title">Kelas</h2>

            <ul class="about-list">

              <li>
                <div class="about-card">

                  <div class="card-icon">
                    <ion-icon class="html" name="logo-html5"></ion-icon>
                  </div>

                  <h3 class="h3 card-title">HTML</h3>

                  <p class="card-text">
                    Hypertext Markup Language adalah bahasa markah standar untuk dokumen yang dirancang untuk ditampilkan di peramban internet. 
                  </p>

                  <a href="#" class="btn btn-primary">Selengkapnya</a>

                </div>
              </li>

              <li>
                <div class="about-card">

                  <div class="card-icon">
                    <ion-icon class="css" name="logo-css3"></ion-icon>
                  </div>

                  <h3 class="h3 card-title">CSS</h3>

                  <p class="card-text">
                    Cascading Style Sheet merupakan aturan untuk mengatur beberapa komponen dalam sebuah web sehingga akan lebih terstruktur dan seragam.
                  </p>

                  <a href="#" class="btn btn-primary">Selengkapnya</a>

                </div>
              </li>

              <li>
                <div class="about-card">

                  <div class="card-icon">
                    <ion-icon class="js" name="logo-javascript"></ion-icon>
                  </div>

                  <h3 class="h3 card-title">Javascript</h3>

                  <p class="card-text">
                    JavaScript adalah suatu bahasa pemrograman tingkat tinggi dan dinamis. Kode JavaScript dapat disisipkan dalam halaman web menggunakan tag script.
                  </p>

                  <a href="#" class="btn btn-primary">Selengkapnya</a>

                </div>
              </li>

            </ul>

          </div>

        </div>
      </section>


      <section class="register" id="register">
        <div class="container">

          <div class="register-content">
            <h2 class="h2 register-title">Ayo daftar sekarang</h2>

            <figure class="register-banner">
              <img src="img/register.png" alt="register banner">
            </figure>
          </div>

          <form action="" class="register-form">

            <div class="input-wrapper">
              <label for="name" class="input-label">Nama</label>

              <input type="text" name="name" id="name" required placeholder=". . ." class="input-field">
            </div>

            <div class="input-wrapper">
              <label for="phone" class="input-label">No HP</label>

              <input type="tel" name="phone" id="phone" required placeholder=". . ." class="input-field">
            </div>

            <div class="input-wrapper">
              <label for="email" class="input-label">Email</label>

              <input type="email" name="email" id="email" required placeholder=". . ." class="input-field">
            </div>

            <div class="input-wrapper">
              <label for="password" class="input-label">Password</label>

              <input type="password" name="password" id="password" placeholder=". . ." required class="input-field">
            </div>

            <a href="#" type="submit" class="btn btn-primary">Daftar</a>

          </form>

        </div>
      </section>

    </article>

  </main>





  <!-- 
    - #FOOTER
  -->

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





  <!-- 
    - #GO TO TOP
  -->

  <a href="#top" class="go-top active" data-go-top>
    <ion-icon name="chevron-up-outline"></ion-icon>
  </a>





  <!-- 
    - custom js link
  -->
  <script src="js/script.js"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>