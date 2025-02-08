<?php
 if(!defined('INDEX')) die("");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data-Siswa</title>
     <!-- Favicon-->
     <link rel="icon" type="image/x-icon"  sizes="64x64" href="logo/dom-san.png" />
     <link href="css/style-data.css" rel="stylesheet" />
</head>
<body>

        <div class="container" style=" background-image: url('logo/1.png');">
        <div class="navbar">
            <a href="?hal=dashboard">Dashboard</a>
            <a href="?hal=data">Data Siswa</a>
            <a href="?hal=cek-riwayat">Cek Riwayat Nasabah</a>
        </div>
            <div class="header">
            <h1>Data Siswa</h1>
        </div>
            <a href="?hal=data_tambah" class="add-button">+</a>
      
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
            <?php
                $query= "SELECT * FROM data_siswa ";
                $query.= "LEFT JOIN kelas ";
                $query.= "ON data_siswa.id_kelas = kelas.id_kelas ";
                $query.= "ORDER BY data_siswa.id_kelas DESC";
                $result= mysqli_query($con,$query);
                $no= 0;

                while($data = mysqli_fetch_assoc($result)) {
                    $no++;
            ?>
            <tr>
                <td><?=$no;?></td>
                <td><img src=images/<?=$data['foto']?> width="100"></td>
                <td><?=$data['nama']?></td>
                <td><?=$data['no_induk']?></td>
                <td><?=$data['kelas']?></td>
                <td><?=$data['saldo']?></td>
                <td class="bank-buttons">
                    <a href="?hal=tarik_saldo&id=<?=$data['id_siswa']?>" class="btn-tarik">Tarik</a>
                    <a href="?hal=tabung_saldo&id=<?=$data['id_siswa']?>" class="btn-tabung">Tabung</a>
                    <a href="?hal=riwayat&id=<?=$data['id_siswa']?>" class="btn-riwayat">Riwayat</a>
                </td>
                <td class="action-buttons">
                    <a href="?hal=data_edit&id=<?=$data['id_siswa']?>" class="btn-edit">Edit</a>
                    <a href="?hal=data_hapus&id=<?=$data['id_siswa']?>&foto=<?=$data['foto']?>" class="btn-hapus">Hapus</a>
                    
                </td>
            </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
</div>
    </div>
</body>
</html>