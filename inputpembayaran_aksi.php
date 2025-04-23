<?php
require 'koneksi.php';

if (isset($_POST['kirim'])) {
    $nisn = $_POST['nisn'];
    $nama = $_POST['nama'];
    $nominal = $_POST['nominal'];
    $filename = $_FILES["file"]["name"];
    $filetmp = $_FILES["file"]["tmp_name"];
    $folder = "bukti/" . $filename;

    move_uploaded_file($filetmp, $folder);

    $tbh = mysqli_query($koneksi, "INSERT INTO pembayaran (nisn, nama, nominal, bukti) VALUES ('$nisn', '$nama', '$nominal', '$filename')");

    if (!$tbh) {
        echo "<script>alert('Gagal menyimpan data');</script>";
    } else {
        echo "<script>alert('Data berhasil disimpan!'); window.location.href='tampilpembayaran.php';</script>";
    }
}
?>