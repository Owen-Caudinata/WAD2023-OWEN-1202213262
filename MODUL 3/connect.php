<!-- File ini berisi koneksi dengan database yang telah di import ke phpMyAdmin kalian -->


<?php
// Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin
$hostname = "127.0.0.1";
$username = "root";
$password = "";
$database = "modul3 owen";



function query($query)
{

    global $conn;

    $result = mysqli_query($conn, $query);

    $rows = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

$conn = new mysqli($hostname, $username, $password, $database);

// 

// Buatlah perkondisian jika tidak bisa terkoneksi ke database maka akan mengeluarkan errornya

if ($conn->connect_error) {
    die("koneksi gagal:" . $conn->connect_error);
}
?>