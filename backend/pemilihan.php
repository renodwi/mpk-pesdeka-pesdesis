<?php
include "../config.php";
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nisataunip = $_SESSION['nisataunip'];
    $type = $_POST['type'];
    $candidate = $_POST['candidate'];

    if($type == "pesdesis") $update_datas_in = "golongan_osis";
    else $update_datas_in = "golongan_mpk";

    $sql = "UPDATE `akun` SET `$update_datas_in` = '$candidate' WHERE `nisataunip` = '$nisataunip'";
    if ($conn->query($sql) === TRUE) {
        echo "Berhasil";
    } else {
        echo "Error: " . $conn->error;
    }
} else {
    header("Location: ./index.php");
}
?>
