<?php
// Konfigurasi Database
$host     = "localhost";
$username = "root";
$password = "";
$database = "db_toko_saya"; // Ubah sesuai nama database Anda nanti

// Membuat koneksi ke MySQL
$koneksi = mysqli_connect($host, $username, $password, $database);

// Memeriksa apakah koneksi berhasil
if (!$koneksi) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}
?>
