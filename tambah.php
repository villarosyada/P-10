<?php
require 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $no_induk = $_POST["no_induk"];
    $nama_siswa = $_POST["nama_siswa"];
    $no_telepon = $_POST["no_telepon"];
    $email = $_POST["email"];
    $jenis_kelamin = $_POST["jenis_kelamin"];
    $sekolah = $_POST["sekolah"];
    $jurusan = $_POST["jurusan"];
    $pembimbing = $_POST["pembimbing"];
    $tanggal_mulai_pkl = $_POST["tanggal_mulai_pkl"];
    $tanggal_selesai_pkl = $_POST["tanggal_selesai_pkl"];

    $query = "INSERT INTO tb_mhs (no_induk, nama_siswa, no_telepon, email, jenis_kelamin, sekolah, jurusan, pembimbing, tanggal_mulai_pkl, tanggal_selesai_pkl) 
              VALUES ('$no_induk', '$nama_siswa', '$no_telepon','$email', '$jenis_kelamin', '$sekolah', '$jurusan', '$pembimbing', '$tanggal_mulai_pkl', '$tanggal_selesai_pkl')";

if (mysqli_query($conn, $query)) {
    echo "<script>alert('Data berhasil ditambahkan!'); window.location.href='dashboard.php';</script>";
} else {
    echo "<script>alert('Gagal menambahkan data!'); window.location.href='form_tambah.php';</script>";
}
}
?>