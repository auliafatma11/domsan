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
    <title>Dashboard Admin</title>
     <!-- Favicon-->
     <link rel="icon" type="image/x-icon"  sizes="64x64" href="logo/dom-san.png" />
     <link href="css/style-index1.css" rel="stylesheet" />
     <style>
    .card {
    background: #fff;
    background-image: url('logo/1.png');
    background-size: 120px;
    background-position: center;
    background-repeat: no-repeat;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    padding: 20px;
    text-align: center;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    margin-left: 50px;
    margin-right: 50px;
    margin-bottom: 50px;
    }
     </style>
</head>
<body>
    <header class="header">
        <img src="logo/dom-san.png" alt="Logo DOM-SAN" class="logo">
        <div class="garis-horizontal"></div>
        <h1 class="title">SELAMAT DATANG DI DASHBOARD ADMIN, SILAHKAN AKSES FITUR YANG TELAH TERSEDIA</h1>
    </header>

    <?php include 'content/dashboard.php'; ?>

    <div class="bank">
        <img src="logo/bmd.png" alt="Logo BMD Syariah">
        <img src="logo/bsi.png" alt="Logo Bank Syariah Indonesia">
    </div>
    <div class="logout-button">
    <a href="logout.php">Logout</a>
    </div>
    <footer>
        Copyright &copy;  <b>By Kelompok 2</b>
    </footer>
</body>
</html>

<?php
    }
?>