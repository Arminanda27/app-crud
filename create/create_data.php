<?php
    include "../connection.php";

//Input random
$id = rand(11, 99);
$id_siswa = rand(11, 99);

//Input data tdk random
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$jurusan = $_POST['jurusan'];

$insert = mysqli_query($koneksi, "INSERT INTO siswa SET id='$id', id_siswa='$id_siswa',
nama='$nama', kelas='$kelas', jurusan='$jurusan'");

if ($insert) {
    $pesan = 'Data Berhasil Masuk';
    echo "<script> alert('$pesan')
    window.location.replace('../index.php');
    </script>";
} else{
    echo "Gagal";
}

?>