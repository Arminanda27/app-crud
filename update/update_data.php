<?php
include "../connection.php";

$id = $_POST['id'];
$nama_lengkap = $_POST['nama_lengkap'];
$kelas = $_POST['kelas'];
$jurusan = $_POST['jurusan'];

$update = mysqli_query($koneksi, "UPDATE siswa SET nama='$nama_lengkap',
kelas='$kelas', jurusan='$jurusan' WHERE id='$id'");

if($update){
    echo "<script>alert('Sukses'); location.href='../update.php';</script>";
} else{
    echo "<script>alert('Gagal'); location.href='../update.php';</script>";
}