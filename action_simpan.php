<?php
    include 'koneksi.php';

    $nama = $_POST['nis'];
    $nis = $_POST['nama'];
    $kelas = $_POST['kelas'];

    mysqli_query($koneksi, "INSERT INTO dt_siswa VALUES('','$nis','$nama','$kelas')");

    header("location:index.php");
?>