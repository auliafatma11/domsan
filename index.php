<?php
    session_start();
    ob_start();

    include "library/config.php";

    if (empty($_SESSION['username']) OR empty($_SESSION['password'])) {
        echo "<script>alert('Anda harus login terlebih dahulu!.'); window.location='landing.php';</script>";
        exit();
    }else {
        define('INDEX', true);


    // Cek apakah user login dan memiliki role admin
    if (!isset($_SESSION['username']) || $_SESSION['role'] !== '1') {
        echo "<script>alert('Akses ditolak! Anda bukan admin.'); window.location='login.php';</script>";
        exit();
}

    
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
     <!-- Favicon-->
     <link rel="icon" type="image/x-icon"  sizes="64x64" href="logo/dom-san.png" />
     <link href="css/style-index.css" rel="stylesheet" />
     <link href="css/style-data.css" rel="stylesheet" />
     <link href="css/style-riwayat.css" rel="stylesheet" />
     <!-- <link href="css/data_tambah2.css" rel="stylesheet" /> -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"> -->


</head>
<body>
    <header class="header">
    <img src="logo/dom-san.png" alt="Logo DOM-SAN" class="logo">
    </header>
    
    <?php include 'konten.php'; ?>

    <div class="bank">
        <img src="logo/bmd.png" alt="Logo BMD Syariah">
        <img src="logo/bsi.png" alt="Logo Bank Syariah Indonesia">
    </div>
    
    <footer>
        Copyright &copy;  <b>By Kelompok 2</b>
    </footer>

</body>
</html>

<?php
    }
?>