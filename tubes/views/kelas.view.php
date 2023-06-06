<?php require("partials/header.php"); ?>
<?php require("partials/navbar.php"); ?>

<section class="kelas">
  <div class="container">
    <h2>Kelas</h2>
    <!-- KELAS -->
    <ul class="about-list">
      <li>
        <div class="about-card">
          <div class="card-icon">
            <ion-icon class="html" name="logo-html5"></ion-icon>
          </div>
          <h3 class="h3 card-title">HTML</h3>
          <div class="sub-card">
            <ion-icon name="book-outline"></ion-icon>
            <p>18 Materi</p>
          </div>  
          <a href="html/html.php" class="btn btn-primary">Selengkapnya</a>
        </div>
      </li>
      <li>
        <div class="about-card">
          <div class="card-icon">
            <ion-icon class="css" name="logo-css3"></ion-icon>
          </div>
          <h3 class="h3 card-title">CSS</h3>
          <div class="sub-card">
            <ion-icon name="book-outline"></ion-icon>
            <p>7 Materi</p>
          </div>  
          <a href="#" onclick="alert('Kelas belum tersedia');" class="btn btn-primary">Selengkapnya</a>
        </div>
      </li>
      <li>
        <div class="about-card">
          <div class="card-icon">
            <ion-icon class="js" name="logo-javascript"></ion-icon>
          </div>
          <h3 class="h3 card-title">Javascript</h3>
          <div class="sub-card">
            <ion-icon name="book-outline"></ion-icon>
            <p>11 Materi</p>
          </div>  
          <a href="#" onclick="alert('Kelas belum tersedia');" class="btn btn-primary">Selengkapnya</a>
        </div>
      </li>
    </ul>
  </div>
</section>


<?php require("partials/footer.php"); ?>