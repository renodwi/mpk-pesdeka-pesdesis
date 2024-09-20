<?php
include "../config.php";
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    $id_siswa = $_POST['id_siswa'];
    $status = $_POST['status'];

    // Prepared statement to select data
    $stmt_select = $conn->prepare("SELECT * FROM `akun` WHERE `id` = ?");
    $stmt_select->bind_param("s", $id_siswa);
    $stmt_select->execute();
    $result = $stmt_select->get_result();

    if($result->num_rows == 0)
    {
        echo "Data tidak ditemukan";
    }
    else
    {
        // Prepared statement to update data
        $stmt_update = $conn->prepare("UPDATE `akun` SET `perwakilan_kelas` = ? WHERE `id` = ?");
        $stmt_update->bind_param("ss", $status, $id_siswa); // Bind parameters correctly
        $executeResult = $stmt_update->execute();

        if($executeResult) 
        {
            echo "Berhasil memperbarui data";
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
