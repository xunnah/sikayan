<?php
session_start();

// Connect to the database
$db = mysqli_connect('localhost', 'root', '', 'sikayan');

// Check if the user is logged in
if (isset($_SESSION['username'])) {
    // Jika pengguna sudah login, tampilkan konten beranda di sini
    echo "Selamat datang, " . $_SESSION['username'];
} else {
    // Jika pengguna belum login, tampilkan pesan "Daftar terlebih dahulu"
    echo "Daftar terlebih dahulu";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Halaman Beranda</title>
</head>
<body>
    <!-- Di sini Anda dapat menambahkan konten HTML sesuai kebutuhan -->
</body>
</html>