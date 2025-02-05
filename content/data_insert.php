<?php
if(!defined('INDEX')) die("");

$foto = $_FILES['foto']['name'];
$lokasi = $_FILES['foto']['tmp_name'];
$tipe = $_FILES['foto']['type'];
$ukuran = $_FILES['foto']['size'];


$nama = $_POST['nama'];
$no_induk= $_POST['no_induk'];
$kelas= $_POST['kelas'];
$saldo= $_POST['saldo'];

$error = "";

if($foto == ""){
    $query = "INSERT INTO data_siswa SET ";
    $query .= "foto = '$foto', ";
    $query .= "nama = '$nama', ";
    $query .= "no_induk = '$no_induk', ";
    $query .= "kelas = '$kelas', ";
    $query .= "saldo = '$saldo'";
   
    $result = mysqli_query($con,$query);
}else{
        if($tipe != "image/jpeg" and $tipe != "image/jpg" and $tipe != "image/png") {
            $error = "Maaf, tipe file tidak didukung!";
        } elseif($ukuran >=4000000) {
            echo $ukuran;
            $error = "Ukuran file terlalu besar (lebih dari 4 MB)!";
        } else {
            $nama_foto = date('YmdHis')."-".$foto;
            move_uploaded_file($lokasi, "images/".$nama_foto);
    
            $query = "INSERT INTO data_siswa SET ";
            $query .= "foto = '$foto', ";
            $query .= "nama = '$nama', ";
            $query .= "no_induk = '$no_induk', ";
            $query .= "kelas = '$kelas', ";
            $query .= "saldo = '$saldo'";
    
            $result = mysqli_query($con,$query);
        }
    }

    if($error != ""){
        echo $error;
        echo "<meta http-equiv='refresh' content='1; url=?hal=data_tambah'>";
    } elseif($query){
        echo "Berhasil menambahkan data pegawai <b>$nama</b>";
        echo "<meta http-equiv='refresh' content='1; url=?hal=data'>";
    } else {
        echo "Tidak dapat menyimpan data !<br>";
        echo mysqli_error();
    }
    ?>