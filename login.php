<?php
session_start();
include "db.php";

if(isset($_POST['login'])){

    $username = mysqli_real_escape_string($conn,$_POST['username']);
    $password = md5($_POST['password']);

    // CEK ADMIN
    $queryAdmin = mysqli_query($conn,"SELECT * FROM tb_admin  WHERE username='$username' AND password='$password'");
    if(mysqli_num_rows($queryAdmin) > 0){
        $dataAdmin = mysqli_fetch_assoc($queryAdmin);
        $_SESSION['status_login'] = "admin";
        $_SESSION['id_admin'] = $dataAdmin['admin_id'];
        header("Location: admin/dashboard.php");
        exit();
    }else{

        // CEK SISWA
        $querySiswa = mysqli_query($conn,
        "SELECT * FROM siswa 
         WHERE nis='$username' 
         AND password='$password'");

        if(mysqli_num_rows($querySiswa) > 0){

            $dataSiswa = mysqli_fetch_assoc($querySiswa);

            $_SESSION['status_login'] = "siswa";
            $_SESSION['nis'] = $dataSiswa['nis'];

            header("Location: siswa/dashboard.php");
            exit();

        }else{

            echo "<script>alert('Username atau Password salah')</script>";

        }

    }

}
?>

<!DOCTYPE html>
<html>
<head>
<title>Login | Sistem Aspirasi</title>
<link rel="stylesheet" href="css/style.css">
</head>

<body id="bg-login">

<div class="box-login">

<h3>LOGIN SISTEM ASPIRASI</h3>

<form method="POST">

<input type="text" name="username" placeholder="Username / NIS" class="input-control" required>

<input type="password" name="password" placeholder="Password" class="input-control" required>

<button type="submit" name="login" class="btn">Login</button>

</form>

</div>

</body>
</html> 