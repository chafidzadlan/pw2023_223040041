<?php 
  $NPM = 41;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
  <p>Aku adalah angka <strong><?= $NPM; ?></strong></p>  
  <p>Jika aku dikali 5, maka aku sekarang menjadi <strong><?= $NPM *=  5; ?></strong></p>
  <p>Jika aku dibagi 2, maka aku sekarang menjadi <strong><?= $NPM /= 2; ?></strong></p>
  <p>Jika aku ditambah 75, maka aku sekarang menjadi <strong><?= $NPM +=  75; ?></strong></p>
  <p>Jika aku dikurang 20, maka aku sekarang menjadi <strong><?= $NPM -= 20; ?></strong></p>

</body>
</html>