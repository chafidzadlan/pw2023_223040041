<?php require('partials/header.php'); ?>

  <!-- REGISTER -->
  <section class="register" id="register">
    <div class="container">
      <h2>Ayo daftar sekarang</h2>
      <div class="line"></div>
      <form action="" method="post" autocomplete="off">
        <?php
          if($errors > 0){
            foreach($errors AS $displayErrors){
            ?>
            <div id="alert"><?php echo $displayErrors; ?></div>
            <?php
            }
          }
        ?> 

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
          <input type="date"class="input-field"  id="date" name="date" required>
        </div>

        <div class="button-list">
          <input type="submit" name="register" value="Daftar">
        </div>
      </form>
      <h3>Already have a account ? <a href="log-in.php">Login</a></h3>
    </div>
  </section>

<?php require('partials/footer.php'); ?>