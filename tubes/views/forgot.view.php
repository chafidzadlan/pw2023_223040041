<?php require('partials/header.php'); ?>

<section class="forgot" id="forgot">
  <div class="container">
    <p class="forgot-text">Reset Password Your Account</p>
    
    <?php  ?>
      <form action="" method="post">
        <div class="form-body">
          <label for="formInput">New Password</label>
          <input type="password" name="password1" class="form-control" id="password" required autofocus autocomplete="off">
        </div>
        <div class="form-body">
          <label for="formInput">Confirm New Password</label>
          <input type="password" name="password1" class="form-control" id="password" required autofocus autocomplete="off">
        </div>
        <button type="submit" name="change" class="btn btn-primary">Reset</button>
      </form>
    <?php  ?> 
    <?php  ?>
      <form action="backend/resetPass.php" method="post"> 
        <div class="form-body">
          <label for="formInput">Username</label>
          <input type="text" name="username" class="form-control" id="formInput" required autofocus autocomplete="off">
        </div>
        <div class="form-body">
          <label for="formInput">Email</label>
          <input type="email" name="email" class="form-control" id="formInput" placeholder="name@example.com" required autofocus autocomplete="off">
        </div>
        <div class="button-forgot">
          <button type="submit" name="reset" class="btn btn-primary">Reset</button>
          | <a href="login.php" class="btn btn-primary">Login</a>
        </div>
      </form>
    <?php  ?>
  </div>
</section>

<?php require('partials/footer.php'); ?>