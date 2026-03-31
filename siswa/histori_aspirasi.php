<?php
session_start();
include '../db.php';

if(!isset($_SESSION['status_login'])){
    header("Location: ../login.php");
}

$nis = $_SESSION['nis'];

$data = mysqli_query($conn,"SELECT * FROM input_aspirasi WHERE nis='$nis'");
?>

<!DOCTYPE html>
<html>
<head>
<title>Histori Aspirasi</title>
<link rel="stylesheet" href="../css/style.css">
</head>

<body>

<header>
    <div class="container">
        <h1>Histori Aspirasi</h1>
        <a href="../dashboard.php" class="btn-kembali">Kembali</a>
    </div>
</header>

<div class="main">
<div class="box">

<h3>Daftar Aspirasi Saya</h3>

<table border="1" width="100%" cellspacing="0">

<tr>
<th>No</th>
<th>Lokasi</th>
<th>Keterangan</th>
</tr>

<?php
$no = 1;

while($row = mysqli_fetch_assoc($data)){
?>

<tr>
<td><?php echo $no++; ?></td>
<td><?php echo $row['lokasi']; ?></td>
<td><?php echo $row['ket']; ?></td>
</tr>

<?php } ?>

</table>

</div>
</div>

</body>
</html>