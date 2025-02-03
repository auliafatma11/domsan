<?php
    session_start();
    ob_start();

    include "library/config.php";

    if (empty($_SESSION['username']) OR empty($_SESSION['password'])) {
        echo "<p align='center'>Anda harus login terlebih dahulu!</p>";
        echo "<meta http-equiv='refresh' content='0.1; url=login.php'>";
    }else {
        define('INDEX2', true);
    
?>

<h1>SELAMAT DATANG USER</h1>
<?php
    }
?>