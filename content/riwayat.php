<?php
if(!defined('INDEX')) die("");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DOM-$AN Riwayat</title>
     <!-- Favicon-->
     <link rel="icon" type="image/x-icon"  sizes="64x64" href="logo/dom-san.png" />
     <link href="css/style-riwayat.css" rel="stylesheet" />
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
        <h1>Riwayat Nasabah</h1>
        <div class="search">
            <input type="text" placeholder="Search">
        </div>
        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Debet</th>
                        <th>Kredit</th>
                        <th>Keterangan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>15/01/2025</td>
                        <td>Devinda Amelia</td>
                        <td>10</td>
                        <td>50.000.00</td>
                        <td>    -    </td>
                        <td>
                            Membayar keperluan pondok</td>
                            <td class="bank-buttons">  <button class="btn-hapus">hapus</button></td>
                          
                        
                    </tr>
                    <!-- Tambahkan baris lain sesuai kebutuhan -->
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>