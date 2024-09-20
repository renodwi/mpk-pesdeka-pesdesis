<?php
$conn = mysqli_connect("localhost", "u714072416_pemilihan_db", "Pemilihan123", "u714072416_pemilihan_db");

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
