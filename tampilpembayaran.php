<?php
require 'koneksi.php';

// Inisialisasi variabel pencarian
$search = '';
if (isset($_POST['search'])) {
    $search = $_POST['search'];
}

// Query untuk mengambil data dengan pencarian
$query = "SELECT * FROM pembayaran WHERE nisn LIKE '%$search%' OR nama LIKE '%$search%' ORDER BY no";
$result = mysqli_query($koneksi, $query);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tampil Pembayaran Sekolah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Data Pembayaran Sekolah</h1>
        <a href="inputpembayaran.php" class="btn btn-primary mb-3">Tambah Pembayaran</a>

        <!-- Form Pencarian -->
        <form method="POST" class="mb-3">
            <div class="input-group">
                <input type="text" class="form-control" name="search" placeholder="Cari NISN atau Nama Siswa" value="<?= htmlspecialchars($search) ?>">
                <button class="btn btn-outline-secondary" type="submit">Cari</button>
            </div>
        </form>

        <table class="table table-bordered">
            <thead class="table-success">
                <tr>
                    <th>No</th>
                    <th>NISN</th>
                    <th>Nama Siswa</th>
                    <th>Nominal</th>
                    <th>Bukti Transfer</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $row['nisn'] ?></td>
                        <td><?= $row['nama'] ?></td>
                        <td>Rp. <?= number_format($row['nominal']) ?></td>
                        <td><img src="bukti/<?= $row['bukti'] ?>" width="100"></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

        <!-- Tombol Kembali -->
        <a href="inputpembayaran.php" class="btn btn-secondary mt-3">Kembali ke Form</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>