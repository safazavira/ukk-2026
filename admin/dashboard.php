<?php
session_start();
if($_SESSION['status_login'] != true){
    header("location:../login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Dashboard Admin</title>
<link rel="stylesheet" href="../css/style.css">
</head>

<body>

<header>
<div class="container">
<h1>Dashboard Admin</h1>
<a href="../logout.php" class="btn-logout">Logout</a>
</div>
</header>

<div class="main">

<div class="box">

<h3>Panel Admin</h3>
<p>Kelola data sistem aspirasi</p>

<div class="dashboard-menu">

<div class="menu-card">
<h4>Data Kategori</h4>
<p>Kelola kategori aspirasi</p>
<a href="data_kategori.php">Buka</a>
</div>

<div class="menu-card">
<h4>Data Aspirasi</h4>
<p>Lihat aspirasi siswa</p>
<a href="data_aspirasi.php">Buka</a>
</div>

</div>

</div>

</div>

</body>
</html>