<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../stylesheet/database.css">
    <title>Form Tambah Data</title>
</head>
<body>
    <div class="head">
        <h1>Form Tambah Data</h1>
    </div>
    <a href="database.php">Kembali</a>
    <div class="form">
        <h3>Tambah Data Baru</h3>
        <form action="tambah.php" method="post" enctype="multipart/form-data">
            <label for="">Nama Pemilik</label><br>
            <input type="text" name="nama" class="form-text"><br>

            <label for="">Merk Handphone</label><br>
            <input type="text" name="merk" class="form-text"><br>

            <label for="">Tahun Pemakaian</label><br>
            <input type="text" name="tahun_pakai" class="form-text"><br>

            <label for="">No. Telp</label><br>
            <input type="text" name="telpon" class="form-text"><br>

            <label for="">Alamat</label><br>
            <textarea name="alamat" id="" cols="30" rows="10"></textarea><br>

            <label for="">Harga</label><br>
            <input type="text" name="harga" class="form-text"><br>

            <label for="nama_gambar">Nama File</label><br>
            <input type="text" name="nama_gambar" class="form-text">
            <label for="gambar">Gambar</label>
            <input type="file" name="gambar" class="form-text"><br>

            <input type="submit" name="submit" value="Kirim" class="btn-submit">
        </form>
    </div>
</body>
</html>


