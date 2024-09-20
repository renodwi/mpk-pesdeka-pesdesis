<?php
include "../config.php";
session_start(); // Memulai session

if(!isset($_SESSION['admin_status'])) $_SESSION['admin_status'] = false;

// Cek apakah form sudah di-submit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $password_input = $_POST['password'];

    // Cek koneksi
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Query untuk mengambil password admin dari database
    $sql = "SELECT * FROM password WHERE `password` = MD5('$password_input')"; // Asumsikan id admin = 1
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION['admin_status'] = true;
        header("Location: .");
    } else {
        $error_message = "Password salah. Silakan coba lagi.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="../assets/css/output.css">
    <script src='https://cdn.jsdelivr.net/npm/sweetalert2@10'></script>
</head>
    <?php
    
    if($_SESSION['admin_status'] == true) require "./dashboard.php";
    else require "./login.php";

    ?>
</html>
