<?php 
    session_start();
    session_unset();
    session_destroy();
    require 'config.php';

    if(isset($_SESSION['login'])) {
        header("Location: login.php");
        exit;
    }
?>