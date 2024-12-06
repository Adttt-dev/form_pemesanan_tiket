<?php
// Harga tiket berdasarkan jenis
$harga_tiket = [
    "Reguler" => 50000,
    "VIP" => 100000,
    "VVIP" => 150000,
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pemesanan Tiket</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./src/css/main.css">
</head>
<body>
<div class="container my-5">
    <h1 class="text-center mb-4">FORM <span class="text-info">PEMESANAN TIKET</span></h1>
    <div class="card shadow-lg">
        <div class="card-body">
            <form action="output_pemesanan.php" method="POST" id="ticketForm">
                <!-- Nama -->
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Lengkap</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fa fa-user"></i></span>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama lengkap" required>
                    </div>
                    <small id="namaError" class="text-danger" style="display: none;">Nama harus berisi huruf</small>
                </div>
                <!-- Email -->
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email" required>
                    </div>
                </div>
                <!-- Jenis Tiket -->
                <div class="mb-3">
                    <label for="jenis_tiket" class="form-label">Jenis Tiket</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fa fa-ticket-alt"></i></span>
                        <select class="form-select" id="jenis_tiket" name="jenis_tiket" required>
                            <?php
                            foreach ($harga_tiket as $jenis => $harga) {
                                echo "<option value='$jenis'>$jenis - Rp" . number_format($harga, 0, ',', '.') . "</option>";
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <!-- Jumlah Tiket -->
                <div class="mb-3">
                    <label for="jumlah_tiket" class="form-label">Jumlah Tiket</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fa fa-hashtag"></i></span>
                        <input type="number" class="form-control" id="jumlah_tiket" name="jumlah_tiket" min="1" placeholder="Masukkan jumlah tiket" required>
                    </div>
                </div>
                <!-- Tombol Kirim -->
                <button type="submit" class="btn btn-info text-white w-100">
                    <i class="fa fa-plane"></i> Kirim
                </button>
            </form>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="./src/js/main.js"></script>
</body>
</html>