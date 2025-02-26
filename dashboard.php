<!DOCTYPE html>
<html lang="id">
<head>
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siswa Data PKL</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color:rgb(38, 153, 206);
            text-align: center;
            margin: 11px;
        }
        h2 {
            color: #333;
        }
        table {
            width: 80%;
            margin: auto;
            border-collapse: separate; /* Memisahkan batas sel*/
            border-spacing: 4px; /* Menentukan jarak antar sel*/
            background: white;
            box-shadow: 0px 4px 8px rgba(61, 63, 63, 0.1);
            border-radius: 5px;
            overflow: hidden;
        }
        th, td {
            padding: 2px;
            border-bottom: 4px solid #ddd;
            text-align: center;
        }
        th {
            background: #007bff;
            color: white;
        }
        tr:hover {
            background:rgb(155, 172, 59);
        }
        a {
            text-decoration: underline;
            color: #007bff;
            font-weight: 800; /* Extra bold */
        }
        a:hover {
            text-decoration: underline;
        }
        .button {
            display: inline-block;
            padding: 9px 10px;
            background: #007bff;
            color: white;
            border-radius: 4px;
            margin: 10px;
            text-decoration: none;
        }
        .button:hover {
            background: #0056b3;
        }

        td {
    white-space: nowrap; /* Mencegah teks turun ke bawah */
    overflow: hidden; /* Menghindari teks keluar dari batas sel */
    text-overflow: ellipsis; /* Menampilkan "..." jika teks terlalu panjang */
    max-width: 700px; /* Sesuaikan lebar maksimum sesuai kebutuhan */
}
    </style>
</head>
<body>
    <h2>DATA SISWA/SISWI PKL</h2>
    <a href="form_tambah.php" class="button">Tambah</a>
    <a href="index.html" class="button" style="background: green;">Logout</a>
    <?php
include "koneksi1.php";
$data = mysqli_query($koneksi, "SELECT * FROM tb_mhs");
if (mysqli_num_rows($data) > 0) { // Memeriksa apakah ada data
    $no = 1;
    ?>
    <table border="5">
        <tr bgcolor="blue">
            <th>No</th>
            <th>no_induk</th>
            <th>nama siswa</th>
            <th>no telepon</th>
            <th>email</th>
            <th>jenis_kelamin</th>
            <th>sekolah</th>
            <th>jurusan</th>
            <th>pembimbing</th>
            <th>tanggal_mulai_pkl</th>
            <th>tanggal_selesai_pkl</th>
            <th>opsi</th>
        </tr>
        <?php
        while ($hasil = mysqli_fetch_array($data)) {
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $hasil['no_induk']; ?></td>
                <td><?php echo $hasil['nama_siswa']; ?></td>
                <td><?php echo $hasil['no_telepon']; ?></td>
                <td><?php echo $hasil['email']; ?></td>
                <td><?php echo $hasil['jenis_kelamin']; ?></td>
                <td><?php echo $hasil['sekolah']; ?></td>
                <td><?php echo $hasil['jurusan']; ?></td>
                <td><?php echo $hasil['pembimbing']; ?></td>
                <td><?php echo $hasil['tanggal_mulai_pkl']; ?></td>
                <td><?php echo $hasil['tanggal_selesai_pkl']; ?></td>
                <td>
                    <a href="ubah.php?id=<?php echo $hasil['no_induk']; ?>">Edit </a> ||
                    <a onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini')"
                       href="hapus.php?id=<?php echo $hasil['no_induk']; ?>">Delete </a>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>
    <?php
} else {
    echo "<p>Tidak ada data siswa PKL yang tersedia.</p>"; // Pesan jika tidak ada data
}
?>