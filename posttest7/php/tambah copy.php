<?php
require "config.php";

if (isset($_POST['submit'])) {
    $nama_pemilik = $_POST['nama'];
    $merk_hp = $_POST['merk'];
    $tahun_pemakaian = $_POST['tahun_pakai'];
    $no_telepon = $_POST['telpon'];
    $alamat = $_POST['alamat'];
    $harga = $_POST['harga'];
    $nama = $_POST['nama_gambar'];
    $query_pemilik = mysqli_query($db, "INSERT INTO pemilik(nama_pemilik, no_telepon, alamat) VALUES ('$nama_pemilik', '$no_telepon', '$alamat')");
    $idbaru = mysqli_insert_id($db);
    $query_handphone = mysqli_query($db, "INSERT INTO handphone (id_pemilik, merk_hp, tahun_pemakaian, harga) VALUES ($idbaru,'$merk_hp','$tahun_pemakaian','$harga')");
    if (!empty($_FILES['gambar']['name'])) {
        $query = mysqli_query($db, "SELECT * FROM pemilik WHERE nama_pemilik= '$nama_pemilik'");
        $result = mysqli_fetch_assoc($query);
        $id = $result['id_pemilik'];
        // $nama = $_POST['nama_gambar'];
        $gambar = $_FILES['gambar']['name'];
        $x = explode('.', $gambar);
        $ekstensi = strtolower(end($x));
        $gambar_baru = "$nama.$ekstensi";
        $tmp = $_FILES['gambar']['tmp_name'];
        if (move_uploaded_file($tmp, "images/$gambar_baru")) {
            $query_gambar = mysqli_query($db, "INSERT INTO gambar VALUES ('',$id, '$nama', '$gambar_baru')");
            if ($query_gambar) {
                header("Location: database.php");
                echo "Gambar Berhasil Diupload";
            } else {
                echo "Gambar Gagal Diupload";
            }
        }
    } else {
        echo "0";
    }
}
