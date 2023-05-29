<?php require('partials/header.php'); ?>

<div class="forgot">
  <div class="container">
    <h2>Email Check</h2>
    <div class="line"></div>
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
      <input type="email" name="email" placeholder="Email" required> <br>
      <input type="submit" name="forgotPass" value="Check">
    </form>
  </div>
</div>

<?php require('partials/footer.php'); ?>