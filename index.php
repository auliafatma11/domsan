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
     <link href="css/style-index.css" rel="stylesheet" />
     <link href="css/style-data.css" rel="stylesheet" />
     <link href="css/style-riwayat.css" rel="stylesheet" />

</head>
<body>


    <?php include 'konten.php'; ?>

    <div class="bank">
        <img src="logo/bmd.png" alt="Logo BMD Syariah">
        <img src="logo/bsi.png" alt="Logo Bank Syariah Indonesia">
    </div>
    <a href="logout.php" class="logout-button">Logout</a>
    <footer>
        Copyright &copy;  <b>By Kelompok 2</b>
    </footer>

</body>
</html>

<?php
    }
?>