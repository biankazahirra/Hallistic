<?php
header('Content-Type: application/json');

// Include koneksi.php untuk mendapatkan variabel $koneksi
include 'koneksi.php';

// Pastikan koneksi berhasil
if ($koneksi->connect_error) {
    die(json_encode(['success' => false, 'message' => 'Connection failed: ' . $koneksi->connect_error]));
}

// Ambil data dari $_POST
$nama = $_POST['nama'] ?? '';
$email = $_POST['email'] ?? '';
$telepon = $_POST['telepon'] ?? '';
$check_in_date = $_POST['check_in_date'] ?? '';
$check_out_date = $_POST['check_out_date'] ?? '';
$payment_method = $_POST['payment_method'] ?? '';

// Ubah format tanggal dari mm/dd/yyyy menjadi yyyy-mm-dd
$check_in_date = date('Y-m-d', strtotime($check_in_date));
$check_out_date = date('Y-m-d', strtotime($check_out_date));

$order_date = date('Y-m-d'); // Tanggal saat ini

// Prepared statement untuk menghindari SQL injection
$stmt = $koneksi->prepare("INSERT INTO daftar_pemesanan (nama, email, telepon, check_in_date, check_out_date, payment_method, created_at) VALUES (?, ?, ?, ?, ?, ?, ?)");

// Bind parameter ke statement
$stmt->bind_param("sssssss", $nama, $email, $telepon, $check_in_date, $check_out_date, $payment_method, $order_date);

// Eksekusi statement
if ($stmt->execute()) {
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false, 'message' => 'Error: ' . $stmt->error]);
}

// Tutup statement dan koneksi
$stmt->close();
$koneksi->close();
?>
