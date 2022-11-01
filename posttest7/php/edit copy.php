<?php
require "config.php";
if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $nama_pemilik = $_POST['nama'];
    $merk_hp = $_POST['merk'];
    $tahun_pemakaian = $_POST['tahun_pakai'];
    $no_telepon = $_POST['telpon'];
    $alamat = $_POST['alamat'];
    $harga = $_POST['harga'];
    $fotolama = $_POST['fotolama'];
    $nama = $_POST['nama_gambar'];
    $tmp = $_FILES['gambar']['tmp_name'];
    $gambar = $_FILES['gambar']['name'];

    date_default_timezone_set("Asia/Makassar");
    $waktu = strtotime("now");
    $date = date("Y-m-d H:i:s", $waktu);
    
    $query_hp = mysqli_query($db, "UPDATE handphone SET merk_hp= '$merk_hp', tahun_pemakaian='$tahun_pemakaian', harga='$harga' WHERE id_pemilik = '$id'");
    if($query_hp){
        $query_pemilik = mysqli_query($db, "UPDATE pemilik SET nama_pemilik='$nama_pemilik', no_telepon='$no_telepon', alamat='$alamat' WHERE id_pemilik = '$id'");
        if($query_pemilik){
            if($gambar){
                unlink('../images/'.$fotolama);
                move_uploaded_file($tmp, "../images/.$gambar");
                $query = mysqli_query($db, "UPDATE gambar SET file = '$gambar', waktu = '$date' WHERE id_pemilik = '$id'");
                if($query){
                    header("Location: database.php");
                } else {
                    echo "Gambar gagal Diupdate";
                }
            }
        } else {
        echo "Tambah pemilik Success";
        }
    } else {
        echo "Tambah data HP gagal";
    }
}
?>

