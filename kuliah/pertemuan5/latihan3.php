<?php 
// Array Multidimensi
$binatang = [["🐈", "Kuning"], ["🐇", "Putih"], ["🐒", "Coklat"]];

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Farm 2</title>
</head>
<body>

  <h2>Daftar Binatang</h2>
  <ul>
    <?php for($i = 0; $i < count($binatang); $i++) { ?>
      <li>
        <?php for($j = 0; $j < count($binatang[$i]); $j++) { ?>
          <?= $binatang[$i][$j]; ?>
        <?php } ?>
      </li>
    <?php } ?>
  </ul>
  
</body>
</html>
