<!-- File ini berisi koneksi dengan database MySQL -->

<?php


// (1) Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin
$HOSTNAME = "localhost";
$USERNAME = "root";
$PASSWORD = "";
$DATABASE = "wad_modul4";

$db = new mysqli($HOSTNAME, $USERNAME, $PASSWORD, $DATABASE);
// 

// (2) Buatlah perkondisian untuk menampilkan pesan error ketika database gagal terkoneksi
if (!$db) {
    echo "Database gagal terkoneksi";
}

// 

?>