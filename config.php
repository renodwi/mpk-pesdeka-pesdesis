<?php
// $conn = mysqli_connect("localhost", "u714072416_pemilihan_db", "Pemilihan123", "u714072416_pemilihan_db");
$conn = mysqli_connect("localhost", "root", "", "pesdesis_pesdeka");

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
