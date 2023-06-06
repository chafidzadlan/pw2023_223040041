<?php
define('BASE_URL', '/pw2023_223040041/kuliah/pertemuan13/');

function koneksi()
{
  // Koneksi ke DB
  $conn = mysqli_connect('localhost', 'root', '', 'pw_223040041') or die('Koneksi Database Gagal!');

  return $conn;
}

function query($query)
{

  $conn = koneksi();
  $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function ubah($data)
{
    $conn = koneksi();
    // ambil data dari tiap elemen dalam form
    $id = ($data["id"]);
    $nrp = htmlspecialchars($data["nrp"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambar = htmlspecialchars($data["gambar"]);

    // query insert data

    $query = "UPDATE siswa SET

     nrp = '$nrp', 
     nama = '$nama', 
     email = '$email',
     jurusan = '$jurusan', 
     gambar = '$gambar'
     WHERE id = $id
     ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function tambah($data)
{
  $conn = koneksi();

  $nim = $data['nim'];
  $nama = $data['nama'];
  $email = $data['email'];
  $jurusan = $data['jurusan'];
  $gambar = $data['gambar'];


  $query = "INSERT INTO mahasiswa VALUES(null, '$nim', '$nama', '$email', '$jurusan', '$gambar')";
  mysqli_query($conn, $query) or die(mysqli_error($conn));

  return mysqli_affected_rows($conn);
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