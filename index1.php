<?php
    session_start();
    ob_start();

    include "library/config.php";

    if (empty($_SESSION['username']) OR empty($_SESSION['password'])) {
        echo "<p align='center'>Anda harus login terlebih dahulu!</p>";
        echo "<meta http-equiv='refresh' content='0.1; url=login.php'>";
    }else {
        define('INDEX', true);
    
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin DOM-SAN</title>
     <!-- Favicon-->
     <link rel="icon" type="image/x-icon"  sizes="64x64" href="logo/dom-san.png" />
     <link href="css/style-index.css" rel="stylesheet" />
</head>
<body>
    <header class="header">
        <img src="logo/dom-san.png" alt="Logo DOM-SAN" class="logo">
        <div class="garis-horizontal"></div>
        <h1 class="title">SELAMAT DATANG DI DASHBOARD ADMIN, SILAHKAN AKSES FITUR YANG TELAH TERSEDIA</h1>
    </header>
    <section class="dashboard">
        <div class="card">
            <h3>JUMLAH NASABAH</h3>
        </div>
        <div class="card">
            <h3>DATA SISWA SMK</h3>
            <a href="data-siswa.php">CLICK NOW</a>
        </div>
        <div class="card" >
            <h3>JUMLAH PENABUNG</h3>
        </div>
        <div class="card" >
            <h3>TAMBAH ADMIN</h3>
            <a href="#">CLICK NOW</a>
        </div>
        <button class="logout-button"><a href="logout.php">Logout</a></button>
    </section>

    <div class="bank">
        <img src="logo/bmd.png" alt="Logo BMD Syariah">
        <img src="logo/bsi.png" alt="Logo Bank Syariah Indonesia">
    </div>
    <footer>
        Copyright &copy; <b>Fauzeet</b> Official
    </footer>
</body>
</html>

<?php
    }
?>