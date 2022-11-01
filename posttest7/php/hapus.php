<?php
include "config.php";

// $id = (int) $_GET['id'];
if (isset($_GET['id'])){
    // $query = mysqli_query($db, "DELETE FROM handphone JOIN pemilik ON pemilik.id_pemilik = handphone.id_pemilik JOIN gambar ON gambar.id_pemilik = pemilik.id_pemilik WHERE handphone.id_pemilik = $_GET[id]");
    // $query_gambar = mysqli_query($db, "SELECT file FROM gambar WHERE id_pemilik = $_GET[id]");
    // while($hapus_gambar = mysqli_fetch_assoc($query_gambar)) {
        // unlink('../'.$hapus_gambar["file"]);
    // }
    
    $query = mysqli_query($db, "SELECT * FROM gambar 
                                WHERE id_pemilik = $_GET[id]");
    if($row = mysqli_fetch_assoc($query)){
        unlink("../images/".$row['file']);
        $sql = mysqli_query($db, "DELETE FROM pemilik  WHERE id_pemilik = $_GET[id]");
        if($sql) {
            header("Location: database.php");
        } else {
            echo "Gagal Hapus Data";
        }
    } else {
        echo "Gagal Hapus Gambar";
    }
}

// if ($id){
//     $query = mysqli_query($db, "DELETE FROM handphone WHERE id_pemilik = '{$id}'");
//     $query = mysqli_query($db, "DELETE FROM pemilik WHERE id_pemilik = '{$id}'");
// }
// header("Location: database.php");
// exit;
