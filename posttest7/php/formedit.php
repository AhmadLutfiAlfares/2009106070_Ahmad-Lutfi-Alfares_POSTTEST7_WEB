<?php
require "config.php";

    session_start();
    if (!isset($_SESSION['login'])) {
        header("Location: login.php");
        exit;
    }

    $id = (int) $_GET['id'];
    if(isset($id)){
        // $query = mysqli_query($db, "SELECT  id_pemilik, merk_hp, tahun_pemakaian, telepon, alamat, harga JOIN pemilik ON handphone.id_hp = pemilik.id_pemilik WHERE id = $id");
        $query = mysqli_query($db, "SELECT * FROM handphone INNER JOIN pemilik ON handphone.id_pemilik = pemilik.id_pemilik INNER JOIN gambar ON pemilik.id_pemilik = gambar.id_pemilik WHERE handphone.id_pemilik = '$id'");
        $result = mysqli_fetch_array($query);
        // $query = mysqli_query($db, "SELECT * FROM gambar INNER JOIN pemilik ON pemilik.id_pemilik = gambar.id_pemilik");
        // $gambar = mysqli_fetch_array($query);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../stylesheet/database.css">
    <title>Edit Data</title>
</head>
<body>
    <div class="head">
        <h1>Edit Data</h1>
    </div>
    <a href="database.php">Kembali</a>
    <div class="form">
        <h3>Edit Data Baru</h3>
        <form action="edit.php" method="post" enctype="multipart/form-data">
            <input type="hidden" id="id" name="id" value='<?= $result['id_pemilik']?>'>
            
            <label for="">Nama Pemilik</label><br>
            <input type="text" name="nama" class="form-text" value='<?= $result['nama_pemilik']?>'><br>
            
            <label for="">Merk Handphone</label><br>
            <input type="text" name="merk" class="form-text" value='<?= $result['merk_hp']?>'><br>

            <label for="">Tahun Pemakaian</label><br>
            <input type="text" name="tahun_pakai" class="form-text" value='<?= $result['tahun_pemakaian']?>'><br>

            <label for="">No. Telp</label><br>
            <input type="text" name="telpon" class="form-text" value='<?= $result['no_telepon']?>'><br>

            <label for="">Alamat</label><br>
            <textarea name="alamat" cols="81" rows="5"><?= $result['alamat']?></textarea><br>

            <label for="">Harga</label><br>
            <input type="text" name="harga" class="form-text" value='<?= $result['harga']?>'><br>

            <label for="nama_gambar">Nama File</label><br>
            <input type="text" name="nama_gambar" class="form-text" value='<?= $result['file']?>'>
            
            <label for="gambar">Gambar</label>
            <img src="../images/<?= $result['file']?>" alt="<?= $result['nama_file']?>" width="80px" height="80px">
            <input type="file" name="gambar" class="form-text" ><br>

            <input type="hidden" id="id" name="fotolama" value='<?= $result['file']?>'>

            <input type="submit" name="submit" value="Kirim" class="btn-submit">
        </form>
    </div>
</body>
</html>


