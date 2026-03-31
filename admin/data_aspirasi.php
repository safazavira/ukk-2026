<?php
session_start();
include '../db.php';

$data = mysqli_query($conn, "SELECT * 
FROM input_aspirasi 
LEFT JOIN aspirasi 
ON input_aspirasi.id_pelaporan = aspirasi.id_pelaporan");
?>

<!DOCTYPE html>
<html>
<head>
<title>Data Aspirasi</title>

<!-- panggil css -->
<link rel="stylesheet" href="../css/style.css">

</head>

<body class="body-aspirasi">
<h2 class="judul">Data Aspirasi Siswa</h2>
<table class="tabel">

<tr>
<th>No</th>
<th>NIS</th>
<th>Lokasi</th>
<th>Keterangan</th>
<th>Status</th>
<th>Feedback</th>
</tr>

<?php
$no = 1;

while($row = mysqli_fetch_assoc($data)){
?>

<tr>

<td><?php echo $no++; ?></td>
<td><?php echo $row['nis']; ?></td>
<td><?php echo $row['lokasi']; ?></td>
<td><?php echo $row['ket']; ?></td>
<td><?php echo $row['status']; ?></td>
<td><?php echo $row['feedback']; ?></td>

</tr>

<?php } ?>

</table>

</body>
</html>