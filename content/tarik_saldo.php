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
        <div class="header">Tambah Data</div>
        <form action="?hal=tarik_proses" method="post" enctype="multipart/form-data">
                    <!-- Input ID -->
     <input type="hidden" name="id" value="<?=$data['id_siswa']?>">
        <div class="form-group">
            <label>Nama</label>
            <input type="text" name="nama" id="nama" disabled>
        </div>
        <div class="form-group">
            <label>Kelas</label>
            <select name="kelas" id="kelas" required>
                <option value=""> - Pilih Kelas - </option>
                <?php
$query = "SELECT * FROM kelas";
$result = mysqli_query($con,$query);
while($data = mysqli_fetch_assoc($result)) {
    echo "<option value='$data[id_kelas]'> $data[kelas] </option>";
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
            <input type="keterangan" name="keterangan" id="nominal" style="width:100%" rows="5 required>
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
