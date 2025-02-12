<!-- <?php
// include 'library/config.php';

// if (isset($_POST['submit'])) {
//     $nama_lengkap = $_POST['nama_lengkap'];
//     $username = $_POST['username'];
//     $password = md5($_POST['password'], PASSWORD_DEFAULT); // Enkripsi password

//     // Query untuk insert ke tabel admin
//     $query = "INSERT INTO admin (nama_lengkap, username, password) VALUES (?, ?, ?)";
//     $stmt = mysqli_prepare($con, $query);
//     mysqli_stmt_bind_param($stmt, "sss", $nama_lengkap, $username, $password);
    
//     if (mysqli_stmt_execute($stmt)) {
//         echo "Admin berhasil ditambahkan! Data juga masuk ke tabel user.";
//     } else {
//         echo "Gagal menambahkan admin: " . mysqli_error($con);
//     }

//     mysqli_stmt_close($stmt);
//     mysqli_close($con);
// }
?> -->


<?php       
include 'library/config.php';

if (isset($_POST['submit'])) {
    $nama_lengkap = $_POST['nama_lengkap'];
    $username = $_POST['username'];
    $password = md5($_POST['password'], PASSWORD_DEFAULT); // Enkripsi password

    $query = "INSERT INTO admin SET ";
    $query .= "nama_lengkap = '$nama_lengkap', ";
    $query .= "username = '$username', ";
    $query .= "password = '$password',";

    $result = mysqli_query($con,$query);

    if($result) {
        echo "<script>
        window.alert('Admin berhasil ditambahkan! Data juga masuk ke tabel user.');
        window.location.href='?hal=data';
        </script>";
    } else {
          echo "Gagal menambahkan admin: " .mysqli_error($con);
       }
}
?>
