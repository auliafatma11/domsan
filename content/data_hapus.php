<?php
if(!defined('INDEX')) die("");

$id = $_GET['id'];
$foto = $_GET['foto'];

if(file_exists("images/$foto")) {
    unlink("images/$foto");
}

$query = "DELETE FROM data_siswa WHERE id_siswa = '$id'";
$result = mysqli_query($con,$query);

if($result){
    echo "<script>
    window.alert('Data berhasil dihapus');
    window.location.href='?hal=data';
    </script>";
} else {
    echo "Tidak dapat menghapus data pegawai!<br>";
    echo mysqli_error();
}

?>