<?php 
// Memanggil file koneksi.php yang sudah dibuat sebelumnya
include 'koneksi.php'; 
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Web Pertama Saya</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f4f9; margin: 0; padding: 40px; text-align: center; }
        .container { background: white; padding: 30px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); display: inline-block; }
        h1 { color: #333; }
        .status-sukses { color: #2ecc71; font-weight: bold; }
    </style>
</head>
<body>

    <div class="container">
        <h1>Selamat Datang di Aplikasi Web Saya! 🚀</h1>
        <p>Ini adalah proyek PHP pertama saya yang diunggah ke GitHub.</p>
        
        <hr>
        
        <!-- Mengecek status database -->
        <p>Status Koneksi Database: 
            <span class="status-sukses">
                <?php if ($koneksi) { echo "Berhasil Terhubung!"; } ?>
            </span>
        </p>
    </div>

</body>
</html>
