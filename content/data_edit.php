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
        <div class="header">Tambah Data</div>
        <form action="?hal=data_insert" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label>Foto</label>
            <input type="file" name="foto" id="foto">
        </div>
        <div class="form-group">
            <label>Nama</label>
            <input type="text" name="nama" id="nama" required>
        </div>
        <div class="form-group">
            <label>No. Induk</label>
            <input type="number" name="no_induk" id="na_induk" required>
        </div>
        <div class="form-group">
            <label>Kelas</label>
            <select name="kelas" id="kelas" required>
                <option value=""> - Pilih Kelas - </option>
                <option value="10"> 10 </option>
                <option value="11"> 11 </option>
                <option value="12"> 12 </option>
            </select>   
        </div>
        <div class="form-group">
            <label>Saldo</label>
            <input type="number" name="saldo" id="saldo" required>
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
