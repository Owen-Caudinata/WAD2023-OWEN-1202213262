<!-- File ini berisi koneksi dengan database yang telah di import ke phpMyAdmin kalian -->


<?php
// Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin
$hostname = "localhost";
$username = "root";
$password = "";
$database = "modul3_owen";

$conn = new mysqli($hostname, $username, $password, $database, 3306);

// 

// Buatlah perkondisian jika tidak bisa terkoneksi ke database maka akan mengeluarkan errornya

if ($conn->connect_error) {
    die("koneksi gagal:" . $conn->connect_error);
} else {
    echo "Koneksi Berhasil ke database";
}
?>