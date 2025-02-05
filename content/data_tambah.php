<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Siswa</title>
     <!-- Favicon-->
     <link rel="icon" type="image/x-icon"  sizes="64x64" href="logo/dom-san.png" />
     <link href="css/style-data_tambah.css" rel="stylesheet" />
</head>
<body>

    <div class="container" style="background-image: url('logo/1.png');">
        <form action="?hal=dat_insert" method="post" enctype="multipart/fotm-data">
        <div class="form-group">
                <label>Foto</label>
                <input type="file" name="foto" id="foto">
            </div>

        <div class="form-group">
                <label>Nama</label>
                <input type="text" name="nama" id="nama" required>
            </div>

            <div class="form-group">
                <label>No.Induk</label>
                <input type="Number" name="no_induk" id="no_induk" required>
            </div>

        <div class="form-group">
            <label for="">Kelas</label>
            <select name="kelas" id="kelas" required>
                <option value=""> - Pilih Kelas - </option>
                <option value="10"> 10 </option>
                <option value="11"> 11 </option>
                <option value="12"> 12 </option>
            </div>

            <div class="form-group">
                <label>Saldo</label>
                <input type="Number" name="saldo" id="saldo" required>
            </div>
            <div class="buttons">
                <a href="?hal=data" class="cancel">Batal</a>
                <a href="?hal=data_insert" class="save">Simpan</a>
            </div>
        </form>
    </div>

</html>