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
        <?php include 'content/data.php'; ?>
    </div>
    <footer>
        Copyright &copy; <b>Fauzeet</b> Official
    </footer>
</body>
</html>