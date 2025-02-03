<?php
    if(!defined('INDEX')) header('location:login.php');

    $halaman = [
        "dashboard",
        "data",
        "riwayat"
    ];

    if(isset($_GET['hal'])) {
        $hal = $_GET['hal'];
    }else {
        $hal = 'dashboard';
    }

    foreach($halaman as $h) {
        if($hal == $h) {
            include "content/$h.php";
            break;
        }
    }
?>