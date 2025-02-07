<?php
    if(!defined('INDEX')) header('location:login.php');

    $halaman = [
        "dashboard",
        "data",
        "cek-riwayat",
        "data_tambah",
        "data_insert",
        "data_edit",
        "data_update",
        "data_hapus",
        "riwayat",
        "riwayat_tambah",
        "riwayat_insert",
        "riwayat_hapus"
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