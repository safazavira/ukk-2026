<?php
session_start();

// Kalau sudah login
if(isset($_SESSION['status_login']) && $_SESSION['status_login'] == true){

    // Cek role user
    if($_SESSION['a_global']->role == "admin"){
        header("Location: admin/dashboard.php");
    } else {
        header("Location: siswa/dashboard.php");
    }

} else {
    // Kalau belum login arahkan ke login
    header("Location: login.php");
}
?>