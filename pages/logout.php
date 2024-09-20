<?php
include "../config.php";
session_start();

$_SESSION['nisataunip'] = "kosong";
session_destroy();

header("Location: ../index.php");
?>
