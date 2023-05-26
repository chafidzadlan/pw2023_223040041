<?php require('partials/header.php'); ?>

<!-- LOG IN -->
<div class="login">
    <div class="container">
      <div class="wrapper">
        <div class="title">Masuk sebagai siswa</div>
        <div class="sub-title">Sudah punya akun? Yuk masuk untuk <br> mengakses beragam fitur</div>
        <form action="" method="post">
          <div class="field">
            <input type="text" name="username" id="username" required>
            <label for="username">Username</label>
          </div>
          <div class="field">
            <input type="password" name="password" id="password" required>
            <label for="password">Password</label>
          </div>
          <div class="content">
            <div class="checkbox">
              <input type="checkbox" name="remember" id="remember">
              <label for="remember">Ingat saya</label>
            </div>
            <div class="pass-link"><a href="forgot.php">Lupa Password?</a></div>
          </div>
          <div class="field">
            <button name="login" type="submit" class="btn btn-primary">Masuk</button>
          </div>
          <div class="signup-link">Belum punya akun? <a href="register.php">Daftar disini</a></div>
        </form>
      </div>

    </div>
  </div>

<?php require('partials/footer.php'); ?>