<?php require('partials/header.php'); ?>

<section class="login">
  <div class="container">
    <h2>Login</h2>
    <div class="line"></div>
    <form action="" method="POST" autocomplete="off">
      <!-- <label for="Email">Email</label> -->
      <input type="email" name="email" id="email" required placeholder="Email">
      <!-- <label for="password">Password</label> -->
      <input type="password" name="password" placeholder="Password">
      <input type="submit" name="login" value="Login">
      <a href="forgot.php" id="forgot">Forgot Your Password?</a>
      <h3>Don't have a account? <a href="register.php">Sign Up</a></h3>
    </form>
  </div>
</section>

<?php require('partials/footer.php'); ?>