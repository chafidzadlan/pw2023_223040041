<?php require('partials/header.php'); ?>

<section class="otp">
  <div class="container">
    <h2>Sign Up</h2>
    <div id="line"></div>
    <form action="" method="POST" autocomplete="off">
      <?php
      if(isset($_SESSION['message'])){
        ?>
        <div id="alert"><?= $_SESSION['message']; ?></div>
        <?php
      }
      ?>

      <?php
      if($errors > 0){
        foreach($errors AS $displayErrors){
        ?>
        <div id="alert"><?= $displayErrors; ?></div>
        <?php
        }
      }
      ?>      
      <input type="number" name="otp" placeholder="Verification Code" required><br>
      <input type="submit" name="verify" value="Verify">
    </form>
  </div>
</section>

<?php require('partials/footer.php') ?>