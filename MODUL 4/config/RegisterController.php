<?php
require 'connect.php';

// (1) Mulai session (jika belum dimulai)
if (!isset($_SESSION)) {
    session_start();
}

// (2) Ambil nilai input dari form registrasi
$email = $_POST['email'];
$name = $_POST['name'];
$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

// (3) Buat dan lakukan query untuk mencari data dengan email yang sama dari nilai input email
$query1 = "SELECT * FROM users WHERE email = '$email';";
$result = mysqli_query($db, $query1);

// (4) Buatlah perkondisian ketika tidak ada data email yang sama (gunakan mysqli_num_rows == 0)
if (mysqli_num_rows($result) == 0) {
    // a. Buatlah query untuk melakukan insert data ke dalam database
    $query2 = "INSERT INTO `users`(`id`, `name`, `username`, `email`, `password`) VALUES ('','[value-2]','[value-3]','[value-4]','[value-5]');";
    $insert = mysqli_query($db, $query2);

    // b. Buat lagi perkondisian atau percabangan ketika query insert berhasil dilakukan
    if ($insert) {
        $_SESSION['message'] = 'Pendaftaran sukses, silahkan login';
        $_SESSION['color'] = 'success';
        header('Location: ../views/login.php');
        exit();
    } else {
        $_SESSION['message'] = 'Pendaftaran gagal';
        header('Location: ../views/register.php');
        exit();
    }
} else {
    $_SESSION['message'] = 'Email sudah terdaftar';
    header('Location: ../views/register.php');
    exit();
}
