<?php
define('BASE_URL', '/pw_223040041/kuliah/pertemuan11/');

function koneksi() {
  $conn = mysqli_connect('localhost', 'root', '', 'pw_223040041') or die('Koneksi Gagal!');
  return $conn;
}

function query($query) {
  $conn = koneksi();
  // Query Table Mahasiswa
  $result = mysqli_query($conn, $query);

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function dd($value)
{
  echo "<pre>";
  var_dump($value);
  die;
  echo "</pre>";
}

function uriIS($uri)
{
  return ($_SERVER["REQUEST_URI"] == $uri) ? 'active' : '';
}
