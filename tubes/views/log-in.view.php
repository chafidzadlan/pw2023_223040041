<?php require("partials/header.php"); ?>

<section class="login">
  <div class="container">
    <h2>Login</h2>
    <div class="line"></div>
    <form action="" method="post" autocomplete="off">
      <input type="email" name="email" placeholder="Email"> <br>
      <input type="password" name="password" placeholder="Password"> <br>
      <input type="submit" name="login" value="Login">
      <a href="forgot.php" id="forgot">Forgot Your Password?</a>
      <h3>Don't have a account? <a href="register.php">Sign Up</a></h3>
    </form>
  </div>
</section>

<?php require("partials/footer.php"); ?>