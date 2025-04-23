<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Pembayaran Sekolah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #007bff; /* Warna biru */
            color: black; /* Warna teks hitam */
        }
        #preview {
            display: none;
            margin-top: 10px;
        }
        .container {
            background-color: rgba(255, 255, 255, 0.9); /* Latar belakang putih transparan untuk konten */
            padding: 20px;
            border-radius: 8px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Form Pembayaran Sekolah</h2>
        
        <!-- Penjelasan Transfer -->
        <div class="alert alert-info" role="alert">
            Silakan transfer ke rekening berikut:<br>
            <strong>Rekening:</strong> 8850473910<br>
            <strong>Atas Nama:</strong> Daffa Dzakwansyah
        </div>

        <form action="inputpembayaran_aksi.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="nisn" class="form-label">NISN</label>
                <input type="text" class="form-control" id="nisn" name="nisn" required>
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Siswa</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="mb-3">
                <label for="nominal" class="form-label">Nominal Pembayaran</label>
                <input type="number" class="form-control" id="nominal" name="nominal" required>
            </div>
            <div class="mb-3">
                <label for="file" class="form-label">Upload Bukti Transfer</label>
                <input type="file" class="form-control" id="file" name="file" accept="image/*" required onchange="previewImage(event)">
            </div>
            <div id="preview">
                <h5>Preview Gambar:</h5>
                <img id="preview-img" src="" alt="Preview" class="img-fluid" style="max-width: 100%; height: auto;">
            </div>
            <button type="submit" class="btn btn-primary" name="kirim">Kirim</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function previewImage(event) {
            const file = event.target.files[0];
            const preview = document.getElementById('preview');
            const previewImg = document.getElementById('preview-img');

            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    previewImg.src = e.target.result;
                    preview.style.display = 'block'; // Tampilkan preview
                }
                reader.readAsDataURL(file);
            } else {
                preview.style.display = 'none'; // Sembunyikan preview jika tidak ada file
            }
        }
    </script>
</body>
</html>