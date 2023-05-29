<?php require("partials/header.php"); ?>

<section class="verify-email">
  <div class="container">
    <h2>Email</h2>
    <div class="line"></div>
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
      <input type="number" name="OTPverify" placeholder="Verification Code" required> <br>
      <input type="submit" name="verifyEmail" value="Verify">
    </form>
  </div>
</section>


<?php require("partials/footer.php"); ?>