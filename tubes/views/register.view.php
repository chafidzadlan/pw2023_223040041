<?php require('partials/header.php'); ?>

  <!-- REGISTER -->
  <section class="register" id="register">
    <div class="container">

      <div class="register-content">
        <h2 class="h2 register-title">Ayo daftar sekarang</h2>

        <figure class="register-banner">
          <img src="img/register.png" alt="register banner">
        </figure>
      </div>

      <form action="" method="post" class="register-form">

        <div class="input-wrapper">
          <label for="username" class="input-label">Username</label>
          <input type="text" name="username" id="username" required placeholder="Username" class="input-field">
        </div>

        <div class="input-wrapper">
          <label for="email" class="input-label">Email</label>
          <input type="email" name="email" id="email" required placeholder="name@example.com" class="input-field">
        </div>

        <div class="input-wrapper">
          <label for="password" class="input-label">Password</label>
          <input type="password" name="password1" id="password" placeholder="Password" required class="input-field">
        </div>

        <div class="input-wrapper">
          <label for="password" class="input-label">Confirm Password</label>
          <input type="password" name="password2" id="password" placeholder="Password" required class="input-field">
        </div>

        <div class="input-wrapper">
          <label for="address" class="input-label">Address</label>
          <input type="text" class="input-field" id="address" placeholder="Address" name="address" required>
        </div>

        <div class="input-wrapper">
          <label for="date" class="input-label">Date of Birth</label>
          <input type="date"class="input-field"  id="date" placeholder="05-05-1955" name="date" required>
        </div>

        <div class="button-list">
          <button type="submit" name="register" class="btn btn-primary">Daftar</button>
          <a href="login.php" class="btn btn-primary">Login</a>
          <a href="index.php" class="btn btn-primary">Kembali</a>
        </div>
        
      </form>

    </div>
  </section>

<?php require('partials/footer.php'); ?>