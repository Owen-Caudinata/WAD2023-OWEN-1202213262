<!-- Pada file ini kalian membuat coding untuk logika update / meng-edit data mobil pada showroom sesuai id-->
<?php
// (1) Jangan lupa sertakan koneksi database dari yang sudah kalian buat yaa
include('connect.php');

// (2) Tangkap nilai "id" mobil (CLUE: gunakan GET)

// (3) Buatkan fungsi "update" yang menerima data sebagai parameter
function update_data($nama_mobil, $brand_mobil, $warna_mobil, $tipe_mobil, $harga_mobil, $id, $conn, $sql)
{
    global $conn;
    $nama_mobil = $_POST['nama_mobil'];
    $brand_mobil = $_POST['brand_mobil'];
    $warna_mobil = $_POST['warna_mobil'];
    $tipe_mobil = $_POST['tipe_mobil'];
    $harga_mobil = $_POST['harga_mobil'];

    $sql = "UPDATE showroom_mobil SET  
    nama_mobil = '$nama_mobil', 
    brand_mobil = '$brand_mobil', 
    warna_mobil = '$warna_mobil' 
    tipe_mobil = '$tipe_mobil', 
    harga_mobil = '$harga_mobil', 
    WHERE id = '$id'";

    update_data($conn, $sql);
}
// Dapatkan data yang dikirim sebagai parameter dan simpan dalam variabel yang sesuai.

// Buatkan perintah SQL UPDATE untuk mengubah data di tabel, berdasarkan id mobil

// Eksekusi perintah SQL

// Buatkan kondisi jika eksekusi query berhasil
// Jika terdapat kesalahan, buatkan eksekusi query gagalnya

// Panggil fungsi update dengan data yang sesuai

// Tutup koneksi ke database setelah selesai menggunakan database

?>