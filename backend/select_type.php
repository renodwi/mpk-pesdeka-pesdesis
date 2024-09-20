<?php
include "../config.php";
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['type'] = $_POST['select_type'];
} else {
    echo "<script>window.location.reload();</script>";
}
?>
