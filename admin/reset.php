<?php
include "../config.php";
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    $id = $_POST['id'];

    // Prepared statement to select data
    $stmt_select = $conn->prepare("SELECT * FROM `akun` WHERE `id` = ?");
    $stmt_select->bind_param("s", $id);
    $stmt_select->execute();
    $result = $stmt_select->get_result();

    if($result->num_rows == 0)
    {
        echo "Data tidak ditemukan";
    }
    else
    {
        $stmt_update = $conn->prepare("UPDATE `akun` SET `golongan_mpk` = '0', `golongan_osis` = '0' WHERE `id` = ?");
        $stmt_update->bind_param("s", $id);
        $executeResult = $stmt_update->execute();

        if($executeResult) 
        {
            echo "Berhasil";
        }
        else 
        {
            echo "Gagal memperbarui data: " . $stmt_update->error;
        }
    }

    // Close prepared statements
    $stmt_select->close();
    $stmt_update->close();
} 
else 
{
    header("Location: ./index.php");
    exit();
}
?>
