<?php
 if(!defined('INDEX')) die("");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DOM-$AN Data-Siswa</title>
     <!-- Favicon-->
     <link rel="icon" type="image/x-icon"  sizes="64x64" href="logo/dom-san.png" />
     <link href="css/style-data.css" rel="stylesheet" />
</head>
<body>
<div class="logo">
            <img src="logo/dom-san.png" alt="logo">
        </div>
        <div class="container">
        <div class="navbar">
            <a href="?hal=dashboard">Dashboard</a>
            <a href="?hal=data">Data Siswa</a>
            <a href="?hal=riwayat">Cek Riwayat Nasabah</a>
        </div>
        <h1>Data Siswa</h1>
<a href="#" class="add-button">+</a>
<div class="search">
    <input type="text" placeholder="Search">
</div>
<div class="table-wrapper">
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Foto</th>
                <th>Nama</th>
                <th>No. Induk</th>
                <th>Kelas</th>
                <th>Saldo</th>
                <th>Keterangan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td><img src="profile1.jpg" alt="Foto" width="40"></td>
                <td>Devinda Amelia</td>
                <td>10</td>
                <td>10</td>
                <td>150,000.00</td>
                <td class="bank-buttons">
                    <button class="btn-tarik">Tarik</button>
                    <button class="btn-tabung">Tabung</button>
                    <button class="btn-riwayat">Riwayat</button>
                </td>
                <td class="action-buttons">
                    <button class="btn-edit">Edit</button>
                    <button class="btn-hapus">Hapus</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>
    </div>
</body>
</html>