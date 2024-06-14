<?php
session_start();
include 'koneksi.php';

// Debugging
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    echo "Email: $email<br>";
    echo "Password: $password<br>";

    // Cek di tabel admin
    $stmt_admin = $koneksi->prepare("SELECT email,' password', nama FROM admin WHERE email = ?");
    $stmt_admin->bind_param("s", $email);
    $stmt_admin->execute();
    $stmt_admin->store_result();

    if ($stmt_admin->num_rows == 1) {
        $stmt_admin->bind_result($stored_email, $stored_password, $stored_nama);
        $stmt_admin->fetch();

        echo "Stored Email (Admin): $stored_email<br>";
        echo "Stored Password (Admin): $stored_password<br>";

        // Verifikasi password admin
        if (password_verify($password, $stored_password)) {
            $_SESSION['email_admin'] = $stored_email;
            $_SESSION['nama_admin'] = $stored_nama;
            header("Location: dashboard.php");
            exit();
        } else {
            echo "Password admin salah";
        }
    } else {
        // Cek di tabel pengguna biasa
        $stmt_user = $koneksi->prepare("SELECT email_penyewa, password_penyewa, nama_penyewa FROM daftar_akun WHERE email_penyewa = ?");
        $stmt_user->bind_param("s", $email);
        $stmt_user->execute();
        $stmt_user->store_result();

        if ($stmt_user->num_rows == 1) {
            $stmt_user->bind_result($stored_email, $stored_password, $stored_nama);
            $stmt_user->fetch();

            echo "Stored Email (User): $stored_email<br>";
            echo "Stored Password (User): $stored_password<br>";

            // Verifikasi password pengguna
            if (password_verify($password, $stored_password)) {
                $_SESSION['email_penyewa'] = $stored_email;
                $_SESSION['nama_penyewa'] = $stored_nama;
                header("Location: home1.php");
                exit();
            } else {
                echo "Password pengguna salah";
            }
        } else {
            echo "Email tidak ditemukan";
        }
    }

    // Jika gagal login
    header("Location: login1.html?error=1");
    exit();
}

?>