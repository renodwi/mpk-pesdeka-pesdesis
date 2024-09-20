<?php
include "../config.php";
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM `akun` WHERE `nisataunip` = '$username' AND `nisataunip` = '$password'";
    $result = $conn->query($sql);

    if($result->num_rows) 
    {
        $rows = $result->fetch_assoc();
        if($_SESSION['type'] == "pesdesis" && $rows['golongan_osis'] != 0)
        {
            echo "Telah Berpartisipasi";
        }
        else if($_SESSION['type'] == "pesdeka" && $rows['golongan_mpk'] != 0)
        {
            echo "Telah Berpartisipasi";
        }
        else if($_SESSION['type'] == "pesdeka" && $rows['perwakilan_kelas'] == 0)
        {
            echo "Bukan perwakilan kelas";
        }
        else 
        {
            echo "Berhasil";
            $_SESSION['nisataunip'] = $username;
        }
    }
    else 
    {
        echo "Username atau password salah";
    }
} else {
    header("Location: ./index.php");
}
?>
