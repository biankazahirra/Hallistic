<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: loginuser.php");
    exit();
}
?>