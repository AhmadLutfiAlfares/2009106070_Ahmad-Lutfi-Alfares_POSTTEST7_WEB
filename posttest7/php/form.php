<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../stylesheet/style.css" />
    <title>Formulir</title>
</head>
<body class="form">
    <div class="head">
        <h1>Pengisian Formulir</h1>
    </div>
    <div class="badan">
        <form action="index.php" method="post">
        <label for="nama">Nama</label><br><br>
        <input type="text" name="nama" id="nama"><br><br>
        <label for="nama">Program Studi</label><br><br>
        <input type="text" name="prodi" id="prodi"><br><br>
        <label for="umur">Angkatan</label><br><br>
        <input type="int" name="angkatan" id="angkatan"><br><br>
        <label for="umur">NIM</label><br><br>
        <input type="int" name="nim" id="nim"><br><br>
        <label for="umur">Umur</label><br><br>
        <input type="int" name="umur" id="umur"><br><br>
        <label for="Gender">Gender</label><br><br>
        <input type="radio" name="gender" value="Laki-Laki" id="rpria">
        <label for="rpria">Laki-Laki</label>
        <input type="radio" name="gender" value="Perempuan" id="rperempuan">
        <label for="rperempuan">Perempuan</label><br><br><br>
        <input type="submit" name="submitForm" value="Submit" onclick="alert('Submit Berhasil')"><br><br><br><br><br>
    </form>
    </div>
    <div class="footer-form">
        <h3>@Copyright 2022 - by Ahmad Lutfi Alfares</h3>
    </div>
</body>
</html>