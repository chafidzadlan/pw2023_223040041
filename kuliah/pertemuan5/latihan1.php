<?php

// Array
// Array adalah variabel yang bisa menampung banyak nilai

// Membuat Array
$hari = array("Senin", "Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu", "Minggu");
$bulan = ["Januari", "Februari", "Maret"];
$myArray = ["Chafidz", 10, false];
$binatang = ["🐈", "🐇", "🐒", "🐼", "🐨", "🐄"];

// Mencetak Array
var_dump($hari);
print_r($bulan);
var_dump($myArray);
echo $binatang[4];

echo "<hr>";

// Manipulasi Array
// Menambah element di akhir
$bulan[] = "April";
$bulan[] = "Mei";
print_r($bulan);
echo "<hr>";

array_push($bulan, "Juni", "Juli", "Agustus");
print_r($bulan);
echo "<hr>";

// Menambah element di awal
array_unshift($binatang, "🐍", "🐔");
print_r($binatang);
echo "<hr>";

// Menghapus element di akhir
array_pop($hari);
print_r($hari);
echo "<hr>";

// Menghapus element di awal
array_shift($hari);
print_r($hari);