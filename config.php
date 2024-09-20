<?php
$servername = "localhost"; // Nama host server database
$username = "root"; // Username untuk mengakses database
$password = ""; // Password untuk mengakses database
$dbname = "pesdesis_pesdeka"; // Nama database yang akan dihubungkan

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
