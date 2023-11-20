<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Mobil</title>
</head>

<body>
    <?php include("navbar.php") ?>
    <center>
        <div class="container">
            <h1>List Mobil</h1>
            <<<<<<< HEAD <?php
            include("connect.php");

            // Buatlah query untuk mengambil data dari database (gunakan query SELECT)

            $sql = "SELECT * FROM showroom_mobil";
            $barang = query("SELECT * FROM showroom_mobil");
            $index = 1;
            foreach ($barang as $item) : ?> <tr>
                <td><?= $index++ ?></td>
                <td><?= $item['nama_mobil'] ?></td>
                <td><?= $item['brand_mobil'] ?></td>
                <td><?= $item['warna_mobil'] ?></td>
                <td><?= $item['tipe_mobil'] ?></td>
                <td><?= $item['harga_mobil'] ?></td>
                <td>
                    <a href="form_detail_mobil.php?id=<?= $item['id'] ?>">Detail</a>
                </td>
                </tr>
                <?php endforeach;




            // Buatlah perkondisian dimana:
            // 1. a. Apabila ada data dalam database, maka outputnya adalah semua data dalam database akan ditampilkan
            // (gunakan num_rows > 0, while, dan mysqli_fetch_assoc())
            // b. Untuk setiap data yang ditampilkan, buatlah sebuah button atau link yang akan mengarahkan web ke

            // form_detail_mobil.php dimana halaman tersebut akan menunjukkan seluruh data dari satu mobil berdasarkanid
            // 2. Apabila tidak ada data dalam database, maka outputnya adalah pesan 'tidak ada data dalam tabel'
=======
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama Mobil</th>
                        <th>Brand</th>
                        <th>Warna</th>
                        <th>Tipe</th>
                        <th>Harga</th>
                    </tr>
                </thead>

                <tbody>

                    <?php
                    include("connect.php");

                    // Buatlah query untuk mengambil data dari database (gunakan query SELECT)
                    $query = "SELECT * FROM showroom_mobil";
                    $result = mysqli_execute_query($conn, $query);

                    // Buatlah perkondisian dimana: 
                    // 1. a. Apabila ada data dalam database, maka outputnya adalah semua data dalam database akan ditampilkan 
                    //       (gunakan num_rows > 0, while, dan mysqli_fetch_assoc())
                    //    b. Untuk setiap data yang ditampilkan, buatlah sebuah button atau link yang akan mengarahkan web ke halaman 
                    //       form_detail_mobil.php dimana halaman tersebut akan menunjukkan seluruh data dari satu mobil berdasarkan id
                    // 2. Apabila tidak ada data dalam database, maka outputnya adalah pesan 'tidak ada data dalam tabel'

                    //<!--  **********************  1  **************************     -->
                    if ($result == true) {
                        while ($row = mysqli_fetch_assoc($result)) { ?>

                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['nama_mobil'] ?></td>
                    <td><?= $row['brand_mobil'] ?></td>
                    <td><?= $row['warna_mobil'] ?></td>
                    <td><?= $row['tipe_mobil'] ?></td>
                    <td><?= $row['harga_mobil'] ?></td>
                    <td>
                        <a href="form_detail_mobil.php?id=<?= $row['id'] ?>" class="btn btn-info" role="button">Details
                            </details></a>
                    </td>

                    <td>
                        <a href="form_update_mobil.php?id=<?= $row['id'] ?>" class="btn btn-info" role="button">Update
                            </details></a>
                    </td>
                </tr>
                >>>>>>> 47ae73f5f21a3b43501b9dcf4fbb770daaf68247





                ?>


                <!--  **********************  1  **************************     -->


                <!--  **********************  2  **************************     -->


                <!--  **********************  2  **************************     -->

        </div>
    </center>
</body>

</html>