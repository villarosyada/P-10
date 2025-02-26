<style>
table {
    background-image: url('c:\Users\DELL\Downloads\8851807_4002676.jpg'); /*url(../../../Users/DELL/Downloads/8851807_4002676.jpg)  */
    background-size: cover;
    background-position: center;
}

th {
    background-color: rgba(20, 76, 129, 0.8); /* Warna biru transparan */
    color: yellow;
}

td {
    background-color: rgba(255, 255, 255, 0.8); /* Warna putih transparan */
}
</style>


<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Siswa</title>
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
            background-color: #007bff;
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
                <h3>Tambah Data Siswa/Siswi</h3>
            </div>
            <div class="card-body">
                <form action="tambah.php" method="POST">
                    <div class="mb-3">
                        <label for="no_induk" class="form-label">no induk</label>
                        <input type="text" class="form-control" id="no_induk" name="no_induk" required>
                    </div>
                    <div class="mb-3">
                        <label for="nama_siswa" class="form-label">nama siswa</label>
                        <input type="text" class="form-control" id="nama_siswa" name="nama_siswa" required>
                    </div>
                    <div class="mb-3">
                    <label for="no_telepon" class="form-label">no telepon</label>
                    <input type="text" class="form-control" id="no_telepn" name="no_telepon" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">jenis Kelamin</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" value="Perempuan" required>
                            <label class="form-check-label">Perempuan</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" value="Laki-Laki" required>
                            <label class="form-check-label">Laki-Laki</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="sekolah" class="form-label">sekolah</label>
                        <input type="text" class="form-control" id="sekolah" name="sekolah" required>
                    </div>
                    <div class="mb-3">
                        <label for="jurusan" class="form-label">jurusan</label>
                        <input type="text" class="form-control" id="jurusan" name="jurusan" required>
                    </div>
                        <div class="mb-3">
                        <label for="pembimbing" class="form-label">pembimbing</label>
                        <input type="text" class="form-control" id="pembimbing" name="pembimbing" required>
                    </div>
                    <div class="mb-3">
                    </div>
                    <div class="mb-3">
                        <label for="tanggal_mulai_pkl" class="form-label">tanggal mulai pkl</label>
                        <input type="date" class="form-control" id="tanggal_mulai_pkl" name="tanggal_mulai_pkl" required>
                    </div>
                    <div class="mb-3">
                        <label for="tanggal_selesai_pkl" class="form-label">tanggal selesai pkl</label>
                        <input type="date" class="form-control" id="tanggal_selesai_pkl" name="tanggal_selesai_pkl" required>
                    <div clas="mb-3">
                    </div>
                    <div clas="mb-3">
                    </div>
                   <button type="submit" class="dashboard.php">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>