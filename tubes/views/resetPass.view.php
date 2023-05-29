<?php require('partials/header.php'); ?>

<section class="resetPass">
  <div class="container">
    <h2>Password</h2>
    <div id="line"></div>
    <form action="" method="POST" autocomplete="off">
      <?php
      if($errors > 0){
        foreach($errors AS $displayErrors){
        ?>
        <div id="alert"><?= $displayErrors; ?></div>
        <?php
        }
      }
      ?>      
      <input type="password" name="password" placeholder="Password" required><br>
      <input type="password" name="confirmPassword" placeholder="Confirm Password" required><br>
      <input type="submit" name="resetPass" value="Save">
    </form>
  </div>
</section>

<?php require('partials/footer.php'); ?>