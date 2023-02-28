<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tugas 2</title>
  <style>
    .td1 {
      height: 100px;
      width: 100px;
      background-color: black;
    }
    .td2 {
      height: 100px;
      width: 100px;
      background-color: white;
    }
  </style>
</head>
<body>

  <table border="1" cellpadding="10" cellspacing="0">
    <?php 
    
      for($angka = 1; $angka <= 5; $angka++) {
        echo "<tr>";
        for($kolom = 1; $kolom <= 5; $kolom++) {
          $kotak = $angka + $kolom;
          if($kotak % 2 == 0) {
            echo "<td class='td1'></td>";
          } else {
            echo "<td class='td2'></td>";
          }
        }
        echo "</tr>";
      }
    ?>
  </table>
  
</body>
</html>