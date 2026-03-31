<?php
session_start();
if($_SESSION['status_login'] != true){
    header("location:../login.php");
}
?>
 
<!DOCTYPE html>
<html>
    <head>
        <title>Dashboard Siswa</title>
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>
        <header>
            <div class="container">
                <h1>Dashboard Siswa</h1>
                <a href="../logout.php" class="btn-logout">Logout</a>
            </div>
        </header>

        <div class="main">
        <div class="box">
            <h3>Selamat Datang</h3>
            <p>Silahkan pilih menu dibawah ini</p>

        <div class="dashboard-menu">

        <div class="menu-card">
            <h4>Kirim Aspirasi</h4>
            <p>Kirim aspirasi atau keluhan</p>
            <a href="kirim_aspirasi.php">Buka</a>
        </div>

        <div class="menu-card">
            <h4>histori aspirasi</h4>
            <p>Lihat aspirasi yang dikirim</p>
            <a href="data_aspirasi.php">Buka</a>
        </div>
        <div>
        </div>
        </div>
    </body>
</html>