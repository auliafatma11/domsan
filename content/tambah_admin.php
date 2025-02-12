<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Admin</title>
    <link rel="stylesheet" href="css/data_tambah2.css">

</head>
<body>
    <div class="container">
        <div class="header">Tambah Admin</div>
        <form action="?hal=insert_admin" method="post" enctype="multipart/form-data">
        <!-- <div class="form-group">
            <label>Foto</label>
            <input type="file" name="foto" id="foto">
        </div> -->
        <div class="form-group">
            <label>Nama Lengkap</label>
            <input type="text" name="nama_lengkap" id="nama_lengkap" required>
        </div>
        <div class="form-group">
            <label>Username</label>
            <input type="username" name="username" id="username" required>
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" id="password" required>
        </div>
        <!-- <div class="form-group">
            <label>Password</label>
            <select name="kelas" id="kelas" required>
                <option value=""> - Pilih Kelas - </option>
                <?php
// $query = "SELECT * FROM kelas";
// $result = mysqli_query($con,$query);
// while($data = mysqli_fetch_assoc($result)) {
//     echo "<option value='$data[id_kelas]'> $data[kelas] </option>";
// }
?>
            </select>   
        </div> -->
        <div class="buttons">
            <input type="submit" value="Simpan" class="btn-save"></a>
            <input type="reset" value="Batal" class="btn-cancel"></a>
        </div>
        </form>
    </div>
    </div>
</body>
</html>
