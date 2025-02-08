<?php
if(!defined('INDEX')) die("");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat</title>
     <!-- Favicon-->
     <link rel="icon" type="image/x-icon"  sizes="64x64" href="logo/dom-san.png" />
     <link href="css/style-riwayat.css" rel="stylesheet" />
</head>
<body>

    <div class="container" style="background-image: url('logo/1.png');">
        <div class="navbar">
            <a href="?hal=dashboard">Dashboard</a>
            <a href="?hal=data">Data Siswa</a>
            <a href="?hal=cek-riwayat">Cek Riwayat Nasabah</a>
        </div>
        <h1>Riwayat Nasabah</h1>
        <div class="search">
        <form method="GET" action="" style="float: right; margin-bottom: 10px;">
    <input type="text" name="keyword" placeholder="Search" value="<?php echo isset($_GET['keyword']) ? $_GET['keyword'] : ''; ?>">
    <button type="submit">🔍</button>
</form>
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
                            <td class="bank-buttons">  <a href="" class="btn-hapus">hapus</a></td>
                          
                        
                    </tr>
                    <!-- Tambahkan baris lain sesuai kebutuhan -->
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>