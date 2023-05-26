<?php
require('functions.php');
$name = 'Home';


// Siapkan data students
$students = query("SELECT * FROM mahasiswa");

require('views/index.view.php');