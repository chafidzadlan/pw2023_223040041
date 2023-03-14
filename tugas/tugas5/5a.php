<?php
    $mahasiswa = [
      [
          "nama"      => "Chafidz Adlan Baidlowi",
          "nrp"       => 223040041,
          "email"     => "chafidz0505@gmail.com",
          "jurusan"   => "Teknik Informatika",
          "gambar"    => "img/1.png"
      ],
      [
          "nama"      => "Bhadrika Arya Putra",
          "nrp"       => 223040018,
          "email"     => "bhadrikaid@gmail.com",
          "jurusan"   => "Teknik Informatika",
          "gambar"    => "img/2.png"
      ],
      [
          "nama"      => "Ahmad Suherman",
          "nrp"       => 223040066,
          "email"     => "ahmadsuherman@gmail.com",
          "jurusan"   => "Teknik Informatika",
          "gambar"    => "img/3.png"
      ],
      [
          "nama"      => "Febi Alia Rahman",
          "nrp"       => 223040059,
          "email"     => "febialia@gmail.com",
          "jurusan"   => "Teknik Informatika",
          "gambar"    => "img/4.png"
      ],
      [
          "nama"      => "Arya Saputra",
          "nrp"       => 223040051,
          "email"     => "aryasaputra@gmail.com",
          "jurusan"   => "Teknik Informatika",
          "gambar"    => "img/5.png"
      ],
      [
          "nama"      => "Flavio Boni",
          "nrp"       => 223040053,
          "email"     => "flavio@gmail.com",
          "jurusan"   => "Teknik Informatika",
          "gambar"    => "img/6.png"
      ],
        [
          "nama"      => "Rama Dhaniaji Refin",
          "nrp"       => 223040040,
          "email"     => "ramadr@gmail.com",
          "jurusan"   => "Teknik Informatika",
          "gambar"    => "img/7.png"
      ],
      [
          "nama"      => "Aurelia Melati Suci",
          "nrp"       => 223040045,
          "email"     => "melatisuci@gmail.com",
          "jurusan"   => "Teknik Informatika",
          "gambar"    => "img/8.png"
      ],
      [
          "nama"      => "Nagar Rasyid Erdiansyah",
          "nrp"       => 223040049,
          "email"     => "nagarasyid@gmail.com",
          "jurusan"   => "Teknik Informatika",
          "gambar"    => "img/9.png"
      ],
      [
          "nama"      => "Lisvindanu",
          "nrp"       => 223040038,
          "email"     => "danuuu657@gmail.com",
          "jurusan"   => "Teknik Informatika",
          "gambar"    => "img/10.png"
      ],
  ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
</head>
<body>

  <h1>Daftar Mahasiswa</h1>

  <?php foreach( $mahasiswa as $mhs ) : ?>
    <ul>
      <li>
        <img src="<?= $mhs["gambar"]; ?>">
      </li>
      <li>Nama : <?= $mhs["nama"]; ?></li>
      <li>NRP : <?= $mhs["nrp"]; ?></li>
      <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
      <li>Email : <?= $mhs["email"]; ?></li>
    </ul>
  <?php endforeach ?>
  
</body>
</html>