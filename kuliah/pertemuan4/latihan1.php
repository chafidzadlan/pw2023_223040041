<?php

// Mengecek apakah sebuah bilangan itu GANJIL / GENAP

function cek_ganjil_genap($angka) { // parameter
  // Jika $angka dibagi 2, sisanya 1 maka GANJIL
  if($angka % 2 === 1) {
    return "$angka adalah bilangan GANJIL";
  } else { // Selain dari itu
    return "$angka adalah bilangan GENAP";
  }
}

echo cek_ganjil_genap(55); // argument
echo "<br>";
echo cek_ganjil_genap(5);
