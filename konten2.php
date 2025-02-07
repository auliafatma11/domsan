<?php
    if(!defined('INDEX2')) header('location:landing.php');

    $halaman = [
        "dashboard", 
    ];

    if(isset($_GET['hal'])) {
        $hal = $_GET['hal'];
    }else {
        $hal = 'dashboard';
    }

    foreach($halaman as $h) {
        if($hal == $h) {
            include "content2/$h.php";
            break;
        }
    }
?>