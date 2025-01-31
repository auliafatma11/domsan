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
    <style>
        body {
            font-family: sans-serif;
            margin: 0;
            padding: 0;
            background-color: #5CCEFF;
            color: #000;
            text-align: center;
        }

        .header {
            margin-top: 20px;
        }

        .logo {
            width: 130px;
        }

        .garis-horizontal {
            border-top: 10px solid #fff;
            border-radius: 10px;
            width: 90%;
            margin: auto;
            margin-bottom: 30px;
        }

        .title {
            margin-top: 10px;
            margin-bottom: 55px;
            font-size: 20px;
            font-weight: semi-bold;
            font-style: italic;
        }

        .dashboard {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            max-width: 800px;
            margin: auto;
        }

        .card {
            background: #fff;
            background-image: url('logo/logo-trans.png');
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

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        }

        .card h3 {
            font-size: 18px;
            margin-bottom: 10px;
        }

        .card a {
            display: inline-block;
            padding: 7px 10px;            
            color: black;
            text-decoration: none;
            border: 3px solid black;
            border-radius: 20px;
            transition: background 0.3s ease;
        }

        .card a:hover {
            background: #5CCEFF;
            color: #fff;
            border: 3px solid #fff;
        }

        .bank {
            margin-top: 20px;
            padding: 10px;
            background: #fff;
            background-size: 100px;
        }

        .bank img {
            width: 150px;
            margin: 0 10px; 
        }
        footer{
    background: #ccc;
    color: #555;
    padding: 20px;
    text-align: center;
    margin-bottom: 0;
    }
    .logout-button {
            position: absolute;
            top: 15px;
            right: 20px;
            background: white;
            color: black;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .logout-button a{
            text-decoration: none;
            list-style: none;
            color: black;
   
        }

        .logout-button:hover {
            background: darkred;
        }
    </style>
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
            <a href="">CLICK NOW</a>
        </div>
        <div class="card">
            <h3>JUMLAH PENABUNG</h3>
        </div>
        <div class="card">
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