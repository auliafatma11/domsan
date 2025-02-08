<?php
if(!defined('INDEX')) die("");

$id = $_GET['id'];
$query = "SELECT * FROM data_siswa WHERE id_siswa = '$id'";
$result = mysqli_query($con,$query);
$data = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dompet Santri</title>
    <link rel="stylesheet" href="css/data_tambah2.css">

</head>
<body>
    <div class="container">
        <div class="header">Edit Data</div>
        <form action="?hal=data_update" method="post" enctype="multipart/form-data">
             <!-- Input ID -->
     <input type="hidden" name="id" value="<?=$data['id_siswa']?>">

        <div class="form-group">
            <label>Foto</label>
            <input type="file" name="foto" id="foto">
            <img src="images/<?=$data['foto']?>" width="100" alt="">
        </div>
        <div class="form-group">
            <label>Nama</label>
            <input type="text" name="nama" id="nama" value="<?=$data['nama']?>">
        </div>
        <div class="form-group">
            <label>No. Induk</label>
            <input type="number" name="no_induk" id="na_induk" value="<?=$data['no_induk']?>">
        </div>
        <div class="form-group">
            <label>Kelas</label>
            <select name="kelas" id="kelas" value="<?=$data['kelas']?>">
                <option value=""> - Pilih Kelas - </option>
                <!-- <option value="10"> 10 </option>
                <option value="11"> 11 </option>
                <option value="12"> 12 </option> -->
                <?php
                $queryj = "SELECT * FROM kelas";
                $resultj = mysqli_query($con,$queryj);
                while($j = mysqli_fetch_assoc($resultj)) {
                    echo "<option value='$j[id_kelas]'";
                    if($j['id_kelas'] == $data['id_kelas']) echo " selected";
                    echo "> $j[kelas] </option>";
                }
                ?>
            </select>   
        </div>
        <div class="form-group">
            <label>Saldo</label>
            <input type="number" name="saldo" id="saldo" value="<?=$data['saldo']?>">
        </div>
        <div class="buttons">
            <input type="submit" value="Simpan" class="btn-save"></a>
            <input type="reset" value="Batal" class="btn-cancel"></a>
        </div>
        </form>
    </div>
    </div>
</body>
</html>
