<?php

    echo "<h4>Menghitung Luas Lingkaran</h4>";

    // Luas lingkaran
    function hitungLuasLingkaran($r)
    {
        echo "Jari-jari = $r cm";
        echo "<br>";

        $result = 3.14 * $r * $r;

        echo "Luas lingkaran = $result cm<sup>2</sup>";
    }

    hitungLuasLingkaran(10);

    echo "<hr>";

    echo "<h4>Menghitung Keliling Lingkaran</h4>";

    // Keliling lingkaran
    function hitungKelilingLingkaran($r)
    {
        echo "Jari-jari = $r cm";
        echo "<br>";

        $result = 2 * 3.14 * $r;

        echo "Keliling lingkaran = $result cm";
    }

    hitungKelilingLingkaran(20);