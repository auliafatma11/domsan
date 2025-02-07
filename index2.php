<?php
    session_start();
    ob_start();

    include "library/config.php";

    if (empty($_SESSION['username']) OR empty($_SESSION['password'])) {
        echo "<script>alert('Anda harus login terlebih dahulu!.'); window.location='landing.php';</script>";
        exit();
    }else {
        define('INDEX2', true);

    // Cek apakah user login dan memiliki role admin
    if (!isset($_SESSION['username']) || $_SESSION['role'] !== '2') {
    echo "<script>alert('Akses ditolak! Anda bukan User.'); window.location='login.php';</script>";
    exit();
    }
    
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard-User</title>
    <link rel="icon" type="image/x-icon"  sizes="64x64" href="logo/dom-san.png" />
    <link href="css/style-index2.css" rel="stylesheet" />
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="profile">
                <p><strong>Username:</strong> ABCDEFG</p>
                <p><strong>Kelas:</strong> XI RPL</p>
            </div>
            <img src="logo/dom-san.png" alt="DOM-SAN Logo" width="100">
            <div class="saldo">
                <p><strong>Saldo:</strong></p>
            </div>
    </div>
        <div class="garis-horizontal"></div>

        <?php include 'konten2.php'; ?>

        <div class="riwayat">
        </div>
        <div class="partners">
            <img src="logo/bmd.png" alt="BMD Syariah">
            <img src="logo/bsi.png" alt="Bank Syariah Indonesia">
        </div>
        <a href="logout.php" class="logout-button">Logout</a>
        <footer>
        Copyright &copy; <b>By Kelompok 2</b> Official
        </footer>
    </div>
</body>
</html>

<?php
    }
?>