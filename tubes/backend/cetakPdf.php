<?php
// cek login
session_start();

if (!isset($_SESSION['login']) && !isset($_SESSION['ids']) && !isset($_SESSION['rls'])) {
    header("Location: ../login");
    exit();
}


if ($_SESSION['rls'] !== "a") {
    header("Location: ../profile");
    exit();
}

// panggil
require_once __DIR__ . '/plugin/vendor/autoload.php';
require 'functions.php';

$query = query("SELECT DISTINCT users.id_users as ids, users.username, users.img , roles.jenis, users.email FROM users, roles WHERE users.id_roles = roles.id_roles");

$filename = date('d-m-Y H:i') . ' WIB - LIST ' . '.pdf';
echo $filename;

$html = '<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>' . $filename . '</title>

    <style>
        .m-auto {
            margin: auto;
        }

        img {
            width: 100px;
        }
    </style>

</head>

<body>
    <div class="m-auto">';
    $html .= '<h1>List Users : </h1>
    <p>Total <b>' . count($query) . '</b> Users</p>
    <table border="1" cellpadding="10" cellspacing="0" class="m-auto">
        <tr>
            <th>No. </th>
            <th>Gambar</th>
            <th>Username</th>
            <th>Email</th>
            <th>Role</th>
            <th>ID</th>
        </tr>';

    $i = 1;
    foreach ($query as $user) {
        $html .= '
    <tr>
        <td>' . $i++ . '</td>
        <td><img src="image/user/' . $user['img'] . '" alt=""></td>
        <td>' . $user['username'] . '</td>
        <td>' . $user['email'] . '</td>
        <td>' . $user['jenis'] . '</td>
        <td>' . $user['ids'] . '</td>
    </tr>
    ';
    }

$html .= '</table>
</div>
</body>           

</html>';
$mpdf = new \Mpdf\Mpdf();

$mpdf->WriteHTML($html);
$mpdf->Output($filename, \Mpdf\Output\Destination::INLINE);