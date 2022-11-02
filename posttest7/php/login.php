<?php
    session_start();
    require "config.php";

    if(isset($_POST['submit'])) {
        $user = $_POST['user'];
        $password = $_POST['password'];
        $query = mysqli_query($db, "SELECT * FROM akun 
                                WHERE username = '$user' OR email = '$user'");
        $result = mysqli_fetch_assoc($query);
        $username = $result['username'];
        if(password_verify($password, $result['password'])) {
            $_SESSION['login'] = true;
            echo "
            <script>
                alert('Selamat Datang $username!');     
                document.location.href='landingPage.php';
            </script>";
            exit;
        } else {
            echo "
            <script>
                alert('Username atau Password salah!');
            </script>";
        }
        $error = true;
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../stylesheet/login.css">
    <title>Login</title>
</head>

<body>
    <div class="header">
        <h1>Smartphone UNMUL</h1>
    </div>
    <div class="form-login">
        <h3>Login</h3>
        <?php if(isset($error)) {
            echo "<p style='color: red;'>Username atau Password Salah!</p>";
        } ?>
        <form action="" method="post">
            <input type="text" name="user" placeholder="email atau username" class="input">
            <input type="password" name="password" placeholder="password" class="input">

            <input type="submit" name="submit" value="Login" class="submit"><br><br>
        </form>

        <p>Belum punya akun?
            <a href="register.php">Register</a>
        </p>
        <p>
            Ingin Kembali? <a href="index.php">Kembali</a>
        </p>
    </div>
</body>

</html>