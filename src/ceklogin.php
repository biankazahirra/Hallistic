<?php
session_start();
if (!isset($_SESSION['email_penyewa'])) {
    header("Location: login.html");
    exit();
}

?>