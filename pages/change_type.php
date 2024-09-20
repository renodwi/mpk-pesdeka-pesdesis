<?php
include "../config.php";
session_start();

$_SESSION['type'] = "unselected";
header("Location: ../index.php");
?>
