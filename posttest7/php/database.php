<?php
include "config.php";

session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

// $sql = "SELECT * FROM smartphone INNER JOIN penjual ON smartphone.id_produk=penjual.id_penjual"; 
// $query = mysqli_query($db, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../stylesheet/database.css">
    <title>Data Smartphone</title>
</head>
<body>
    <div class="header">
        <h1>Data Handphone</h1>
    </div>
    <div class="main" style="overflow-x: auto;">
    <h3><a href="landingPage.php">Kembali</a></h3>
    <div class="searching">
        <form action="" method="get">
            <input type="text" name="searching" placeholder="Cari berdasarkan nama" class="search">
            <input type="submit" name="cari" class="submit">
            </form>
    </div>
        <table>
            <thead>
                <tr>
                    <th colspan="9" class="thead">
                        <h3 class="center">Daftar Hp Second</h3>
                    </th>
                    <th style="width: 20px;" colspan="2">
                        <a href="formdatabase.php" class="tambah">Tambah</a>
                    </th>
                </tr>
                <tr>
                    <th nowrap>Pemilik</th>
                    <th>Handphone</th>
                    <th>Tahun Pemakaian</th>
                    <th>No. Telp</th>
                    <th>Alamat</th>
                    <th>Harga</th>                   
                    <th>Foto</th>                   
                    <th>Waktu Upload</th>                   
                    <th colspan="3">Tindakan</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require "config.php";

                if(isset($_GET['cari'])) {
                    $search = $_GET['searching'];
                    $query = mysqli_query($db, "SELECT * FROM handphone INNER JOIN pemilik ON handphone.id_pemilik = pemilik.id_pemilik INNER JOIN gambar ON handphone.id_pemilik = gambar.id_pemilik WHERE nama_pemilik LIKE '%$search%'");
                    // $query = mysqli_query($db, "SELECT * FROM pemilik WHERE nama_pemilik LIKE '%$search%'");
                } else {
                    $query = mysqli_query($db, "SELECT * FROM handphone INNER JOIN pemilik ON handphone.id_pemilik = pemilik.id_pemilik INNER JOIN gambar ON handphone.id_pemilik = gambar.id_pemilik");
                    // $i = 1;
                }
                // $query = mysqli_query($db, "SELECT handphone.id_hp AS id, pemilik.nama_pemilik, merk_hp, tahun_pemakaian, pemilik.no_telepon, pemilik.alamat, harga FROM handphone JOIN pemilik ON pemilik.id_pemilik = handphone.id_hp");
                while ($row = mysqli_fetch_assoc($query)) {
                    ?>
                    <tr>
                        <td nowrap><?= $row['nama_pemilik'] ?></td>
                        <td><?= $row['merk_hp'] ?></td>
                        <td><?= $row['tahun_pemakaian'] ?></td>
                        <td><?= $row['no_telepon'] ?></td>
                        <td><?= $row['alamat'] ?></td>
                        <td><?= $row['harga'] ?></td>
                        <td><img src="../images/<?= $row['file'] ?>"  width="100" height="100"></td>
                        <td><?= $row['waktu'] ?></td>
                        <td>
                            <a href="formedit.php?id=<?= $row['id_pemilik']?>">Edit</a>
                        </td>
                        <td>
                            <a href="hapus.php?id=<?= $row['id_pemilik']?>">Hapus</a>
                        </td>
                    </tr>
                <?php
                    // $i++;
                } 
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>