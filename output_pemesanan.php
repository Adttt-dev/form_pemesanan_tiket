<?php
// Harga tiket berdasarkan jenis
$harga_tiket = [
    "Reguler" => 50000,
    "VIP" => 100000,
    "VVIP" => 150000,
];

// Variabel untuk menyimpan data dan pesan
$nama = isset($_POST["nama"]) ? trim($_POST["nama"]) : "";
$email = isset($_POST["email"]) ? trim($_POST["email"]) : "";
$jenis_tiket = isset($_POST["jenis_tiket"]) ? $_POST["jenis_tiket"] : "";
$jumlah_tiket = isset($_POST["jumlah_tiket"]) ? (int) $_POST["jumlah_tiket"] : 0;
$total_harga = isset($harga_tiket[$jenis_tiket]) ? $harga_tiket[$jenis_tiket] * $jumlah_tiket : 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ringkasan Pemesanan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./src/css/main.css">
</head>
<body>
<div class="container my-5">
    <h1 class="text-center mb-4">RINGKASAN <span class="text-info">PEMESANAN</span></h1>
    <div class="card shadow-lg">
        <div class="card-body">
            <?php if (!empty($nama) && !empty($email) && !empty($jenis_tiket) && $jumlah_tiket > 0): ?>
                <div class="alert alert-info text-center">
                    <i class="fa fa-check-circle fa-2x"></i>
                    <h4 class="mt-2">Pemesanan Berhasil!</h4>
                </div>
                <ul class="list-group mb-4">
                    <li class="list-group-item d-flex align-items-center">
                        <span class="icon-container"><i class="fa fa-user text-info"></i></span>
                        <strong>Nama Lengkap:</strong> <span class="ms-auto"><?= htmlspecialchars($nama) ?></span>
                    </li>
                    <li class="list-group-item d-flex align-items-center">
                        <span class="icon-container"><i class="fa fa-envelope text-info"></i></span>
                        <strong>Email:</strong> <span class="ms-auto"><?= htmlspecialchars($email) ?></span>
                    </li>
                    <li class="list-group-item d-flex align-items-center">
                        <span class="icon-container"><i class="fa fa-ticket-alt text-info"></i></span>
                        <strong>Jenis Tiket:</strong> <span class="ms-auto"><?= htmlspecialchars($jenis_tiket) ?></span>
                    </li>
                    <li class="list-group-item d-flex align-items-center">
                        <span class="icon-container"><i class="fa fa-hashtag text-info"></i></span>
                        <strong>Jumlah Tiket:</strong> <span class="ms-auto"><?= $jumlah_tiket ?></span>
                    </li>
                    <li class="list-group-item d-flex align-items-center">
                        <span class="icon-container"><i class="fa fa-money-bill-wave text-info"></i></span>
                        <strong>Total Harga:</strong> <span class="ms-auto">Rp<?= number_format($total_harga, 0, ',', '.') ?></span>
                    </li>
                </ul>
                <a href="form_pemesanan.php" class="btn btn-primary w-100">
                    <i class="fa fa-arrow-left"></i> Kembali
                </a>
            <?php else: ?>
                <div class="alert alert-danger text-center">
                    <i class="fa fa-times-circle fa-2x"></i>
                    <h4 class="mt-2">Data Tidak Lengkap!</h4>
                </div>
                <a href="form_pemesanan.php" class="btn btn-danger w-100">
                    <i class="fa fa-arrow-left"></i> Kembali
                </a>
            <?php endif; ?>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
