<?php
require 'functions.php';

$name = "Ubah Data Mahasiswa";

// ambil data di url
$id = $_POST['id'];

// query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM siswa WHERE id = $id")[0];

//cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
    // cek apakah data berhasil di ubah atau tidak
    if (ubah($_POST) > 0) {
        echo "
           <script> 
            alert('data berhasil diubah!');
            document.location.href = 'index.php';
           </script>
        ";
    } else
        echo "<script>
    alert('data gagal diubah!);
    document.location.href = 'index.php';
    </script>";
}

require("views/ubah.view.php");