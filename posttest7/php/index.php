<?php
// variabel kosong
$nama = $nim = $umur = $prodi = $angkatan = $gender = "";

session_start();
if(isset($_POST["submitForm"])){
    $_SESSION["submitForm"] = $_POST["submitForm"];
    $_SESSION["nama"] = $_POST["nama"];
    $_SESSION["nim"] = $_POST["nim"];
    $_SESSION["umur"] = $_POST["umur"];
    $_SESSION["prodi"] = $_POST["prodi"];
    $_SESSION["angkatan"] = $_POST["angkatan"];
    // $_SESSION["gender"] = $_POST["gender"];
}

// var_dump($_SESSION);
// var_dump($_POST);
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../stylesheet/style.css" />
    <script src="jquery.js"></script>
    <title>POSTTEST 7</title>
</head>

<body>

    <div class="header">
        <div class="header-logo">
            <h1>SMARTPHONE <br />
                UNMUL
            </h1>
        </div>
        <div class="header-list">
            <ul>
                <li><a href="form.php">Form</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
        </div>
        <div class="header-about">
            <ul>
                <b>
                    <li id="btnWarna" onmousemove="Cursor()">Ubah Warna Teks</li>
                    <li id="about" onmousemove="Cursor()">About</li>    
                    <li id="dark-mode" onmousemove="Cursor()">Dark Mode</li>
                    <li id="reload" onmousemove="Cursor()" onclick="location.reload();">Home</li>
                </b>
            </ul>
        </div>
    </div>
    <hr>

    <div class="main-content">
        <div class="copy-container">
            <h2>Iphone</h2>
            <ul id="ul-container">
                <li class="content_list"><img src="../assets/iphone 8.png" title="Iphone 8" width="300" height="350">
                    <h4>Iphone 8 64 GB</h4>
                    <h3>Rp 2.899.000</h3>
                </li>
                <li class="content_list"><img src="../assets/iphone X.png" title="Iphone X" width="300" height="350">
                    <h4>Iphone X 64 GB</h4>
                    <h3>Rp 4.690.000</h3>
                </li>
                <li class="content_list"><img src="../assets/iphone XS.png" title="Iphone X" width="300" height="350">
                    <h4>Iphone XS 64 GB</h4>
                    <h3>Rp 4.450.000</h3>
                </li>
                <li class="content_list"><img src="../assets/iphone XS.png" title="Iphone X" width="300" height="350">
                    <h4>Iphone XS 256 GB</h4>
                    <h3>Rp 5.350.000</h3>
                </li>
                <li class="content_list"><img src="../assets/iphone xs max.png" title="Iphone X" width="300" height="350">
                    <h4>Iphone XS MAX 64 GB</h4>
                    <h3>Rp 5.290.000</h3>
                </li>
                <li class="content_list"><img src="../assets/iphone 11.png" title="Iphone X" width="300" height="350">
                    <h4>Iphone 11 64 GB</h4>
                    <h3>Rp 6.298.000</h3>
                </li>
                <li class="content_list"><img src="../assets/iphone 11 pro max.png" title="Iphone X" width="230" height="350">
                    <h4>Iphone 11 PRO MAX 64 GB</h4>
                    <h3>Rp 8.998.000</h3>
                </li>
                <li class="content_list"><img src="../assets/iphone 12.png" title="Iphone X" width="300" height="350">
                    <h4>Iphone 12 64 GB</h4>
                    <h3>Rp 8.200.000</h3>
                </li>
                <!-- <li class="content_list"><img src="images/iphone 12 mini.png" title="Iphone X" width="300" height="350">
                    <h4>Iphone 12 mini 128 GB</h4>
                    <h3>Rp 7.700.000</h3>
                </li> -->
                <li class="content_list"><img src="../assets/iphone 12 pro max.png" title="Iphone X" width="230" height="350">
                    <h4>Iphone 12 pro max 512 GB</h4>
                    <h3>Rp 14.000.000</h3>
                </li>
                <li class="content_list"><img src="../assets/iphone 13.png" title="Iphone X" width="300" height="350">
                    <h4>Iphone 13 256 GB</h4>
                    <h3>Rp 12.600.000</h3>
                </li>
                <li class="content_list"><img src="../assets/iphone 13 pro max.png" title="Iphone X" width="300" height="350">
                    <h4>Iphone 13 PRO MAX 256 GB</h4>
                    <h3>Rp 25.249.000</h3>
                </li>
            </ul>
        </div>
    </div>

    <div class="footer">
        <h2>About Me</h2>
        <div class="foto">
            <img src="../assets/PHOTO.jpg" title="Ahmad Lutfi Alfares" width="500" height="350" >
        </div>
        <div class="isi-diri">
            <table>
                <tr>
                    <td style="width:50%">Nama</td>
                    <td style="width: 25%">:</td>
                    <td> <?php if (empty($_POST["nama"])) {
                        echo $nama;
                    } else {
                        echo $_SESSION["nama"]; 
                    };?>  
                    </td>
                </tr>
                <tr>
                    <td>NIM</td>
                    <td>:</td>
                    <td> <?php if (empty($_POST["nim"])) {
                        echo $nim;
                        // $_POST["nim"] = "";
                    } else {
                        echo $_SESSION["nim"];
                    }?>
                    </td>
                </tr>
                <tr>
                    <td>Umur</td>
                    <td>:</td>
                    <td> <?php if(empty($_POST["umur"])) {
                        echo $umur;
                        // $_POST["umur"] == "";
                    } else {
                        echo $_SESSION["umur"]; 
                    }?>
                    </td>
                </tr>
                <tr style="width: 30%">
                    <td>Program Studi</td>
                    <td>:</td>
                    <td> <?php if(empty($_POST["prodi"])) {
                        echo $prodi;
                        // $_POST["prodi"] = "";
                    } else {
                        echo $_SESSION["prodi"];
                    }?>
                    </td>
                </tr>
                <tr style="width: 30%">
                    <td>Angkatan</td>
                    <td>:</td>
                    <td> <?php if(empty($_POST["angkatan"])) {
                        echo $angkatan;
                        // $_POST["angkatan"] = "";
                    } else {
                        echo $_SESSION["angkatan"];
                    }?>
                    </td>
                </tr>
                <tr style="width: 30%">
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td> <?php if(empty($_POST["gender"])) {
                        echo $gender;
                        // $_POST["gender"] = "";
                    } else {
                        echo $_POST["gender"];
                    }?>
                    </td>
                </tr>
            </table>
            <br><br><br><br><br><br><br><br>
        </div>
        <br><br><br><br>
    </div>

    <div class="bar-clossing">
        <h3>@Copyright 2022 - by Ahmad Lutfi Alfares</h3>
    </div>
    <!-- <script>
        const press = document.getElementById("btnHilang")
        press.addEventListener("click", function(){
            const x = document.getElementsByClassName("footer")[0]
            if(x.style.display == "none") {
            x.style.display = "block"
            } else {
                x.style.display = "none"
            }
        });
    </script> -->
    <script src="../javascript/jsindex.js"></script>


</body>

</html>