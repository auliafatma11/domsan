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
    <title>Tambah Data</title>
    <link rel="stylesheet" href="css/data_tambah2.css">

</head>
<body>
    <div class="container">
        <div class="header">Transaksi</div>
        <form action="?hal=tarik_proses" method="post" enctype="multipart/form-data">
                    <!-- Input ID -->
     <input type="hidden" name="id" value="<?=$data['id_siswa']?>">
     <input type="hidden" name="tipe" value="tarik">
        <div class="form-group">
            <label>Nama</label>
            <input type="text" name="nama" id="nama" value="<?=$data['nama']?>" disabled>
        </div>
        <div class="form-group">
            <label>Kelas</label>
            <select name="kelas" id="kelas" disabled>
                <option value=""> - Pilih Kelas - </option>

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
            <label>Jenis Transaksi</label>
            <select name="kelas" id="kelas" required>
                <option value=""> - Pilih Transaksi - </option>
                <?php
                $query = "SELECT * FROM jenis";
                $result = mysqli_query($con,$query);
                while($data = mysqli_fetch_assoc($result)) {
                    echo "<option value='$data[id_jenis]'> $data[jenis] </option>";
                }
                ?>
            </select>   
        </div>

        <div class="form-group">
            <label>Nominal</label>
            <input type="number" name="nominal" id="nominal" required>
        </div>

        <div class="form-group">
            <label>Keterangan</label>
            <input type="keterangan" name="keterangan" id="nominal" style="width:98%" rows="5" required>
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
