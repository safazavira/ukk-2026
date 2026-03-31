<?php
session_start();
include "../db.php";

$nis = $_SESSION['nis'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Kirim Aspirasi</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>

<!-- HEADER -->
<header>
    <div class="container">
        <h1>Aspirasi Siswa</h1>
        <a href="../dashboard.php" class="btn-kembali">Kembali</a>
    </div>
</header>

<!-- MAIN -->
<div class="main">
    <div class="box">    
        <h3>Kirim Aspirasi</h3>
        <form method="POST">
            <!-- KATEGORI -->
            <select name="kategori" class="input-control" required>
                <option value="">-- Pilih Kategori --</option>
                <?php
                    $kategori = mysqli_query($conn,"SELECT * FROM kategori");
                    while($k = mysqli_fetch_array($kategori)){
                ?>
                <option value="<?php echo $k['id_kategori']; ?>">
                        <?php echo $k['ket_kategori']; ?>
                </option>
                <?php } ?>
            </select>

             <!-- LOKASI -->
            <input type="text" name="lokasi" class="input-control" placeholder="Lokasi" required>
            <textarea name="ket" class="input-control" placeholder="Keterangan aspirasi" required></textarea>

            <!-- BUTTON -->
            <button type="submit" name="submit" class="btn"> Kirim Aspirasi </button>
        </form>
            <?php
                if(isset($_POST['submit'])){
                    $id_kategori = $_POST['id_kategori'];
                    $lokasi = $_POST['lokasi'];
                    $ket = $_POST['ket'];

                    $query = mysqli_query($conn, "INSERT INTO input_aspirasi (nis, id_kategori, lokasi, ket) 
                    VALUES ('$nis','$id_kategori','$lokasi','$ket')");

                    if($query){
                        echo "<script>alert('Berhasil Tambah Aspirasi'); window.location ='histori_aspirasi.php';</script>";
                    }else{
                        echo 'Gagal '.mysqli_error($conn);
                    }
                    
                }
            ?>
    </div>
</div>
</body>
</html>