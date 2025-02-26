<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
        }
        .card {
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }
        .btn-custom {
            background-color:rgb(30, 32, 34);
            color: white;
        }
        .btn-custom:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card col-md-6 mx-auto">
            <div class="card-header bg-primary text-white text-center">
            <?php
include "koneksi1.php";

$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM tb_mhs WHERE no_induk='$id'");
$hasil = mysqli_fetch_array($data);
$jenis_kelamin = $hasil['jenis_kelamin'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Mengubah Data Siswa</title>
</head>
<body>
    <h1>EDIT DATA SISWA/SISWI PKL</h1>
    <form method="post" action="">
        <label>No Induk</label><br>
        <input type="text" name="no_induk_lama" value="<?php echo $hasil['no_induk'];?>" readonly><br>
        <label>No Induk Baru</label><br>
        <input type="text" name="no_induk_baru" value="<?php echo $hasil['no_induk'];?>"><br>
        <label>Nama Siswa</label><br>
        <input type="text" name="nama_siswa" value="<?php echo $hasil['nama_siswa'];?>"><br>
        <label>No Telepon</label><br>
        <input type="text" name="no_telepon" value="<?php echo $hasil['no_telepon'];?>"><br>
        <label>Email</label><br>
        <input type="text" name="email" value="<?php echo $hasil['email'];?>"><br>
        <label>Jenis Kelamin</label><br>
        <input type="radio" name="jenis_kelamin" value="Perempuan" <?php if($jenis_kelamin=='Perempuan'){echo "checked";} ?>> Perempuan
        <input type="radio" name="jenis_kelamin" value="Laki-Laki" <?php if($jenis_kelamin=='Laki-Laki'){echo "checked";} ?>> Laki-Laki<br>
        <label>Sekolah</label><br>
        <input type="text" name="sekolah" value="<?php echo $hasil['sekolah'];?>"><br>
        <label>Jurusan</label><br>
        <input type="text" name="jurusan" value="<?php echo $hasil['jurusan']; ?>"><br>
        <label>pembimbing</label><br>
        <input type="text" name="pembimbing" value="<?php echo $hasil['pembimbing']; ?>"><br>
        <label>tanggal mulai pkl</label><br>
        <input type="date" name="tanggal_mulai_pkl" value="<?php echo $hasil['tanggal_mulai_pkl']; ?>"><br>
        <label>tanggal selesai pkl</label><br>
        <input type="date" name="tanggal_selesai_pkl" value="<?php echo $hasil['tanggal_selesai_pkl']; ?>"><br>
        <button type="submit" name="simpan">Simpan</button> <button><a href="dashboard.php">Kembali</a></button>
    </form>
    <?php
    if (isset($_POST['simpan'])) {
        $no_induk_lama = $_POST['no_induk_lama'];
        $no_induk_baru = $_POST['no_induk_baru'];
        $nama_siswa = $_POST['nama_siswa'];
        $no_telepon = $_POST['no_telepon'];
        $email = $_POST['email'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $sekolah = $_POST['sekolah'];
        $jurusan = $_POST['jurusan'];
        $pembimbing = $_POST['pembimbing'];
        $tanggal_mulai_pkl = $_POST['tanggal_mulai_pkl'];
        $tanggal_selesai_pkl = $_POST['tanggal_selesai_pkl'];

        // Perbarui query untuk mengubah no_induk
        $sql = "UPDATE tb_mhs SET no_induk='$no_induk_baru', nama_siswa='$nama_siswa', no_telepon='$no_telepon', email='$email', jenis_kelamin='$jenis_kelamin', sekolah='$sekolah', jurusan='$jurusan', pembimbing='$pembimbing', tanggal_mulai_pkl='$tanggal_mulai_pkl', tanggal_selesai_pkl='$tanggal_selesai_pkl'WHERE no_induk='$no_induk_lama'";

        // Cek apakah proses simpan berhasil
        if (mysqli_query($koneksi, $sql)) {
            header('Location: dashboard.php');
            exit();
        } else {
            echo "Oops... maaf, proses penyimpanan data tidak berhasil: " . mysqli_error($koneksi);
        }
    }
    ?>
</body>
</html>