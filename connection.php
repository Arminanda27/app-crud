<?php
    $host ="localhost";
    $user ="root";
    $pass ="";
    $database ="sekolah";

    $koneksi = mysqli_connect($host,$user,$pass,$database);
    if(!$koneksi){
        echo ("sukses");
    }
    
?>