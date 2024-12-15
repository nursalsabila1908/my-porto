<?php
$host = "localhost"; // Host database (default: localhost)
$user = "root"; // Username MySQL (default: root)
$password = ""; // Password MySQL (default: kosong jika di XAMPP / laragon)
$database = "portofolio"; // Nama database yang dibuat

// Koneksi ke database
$conn = new mysqli($host, $user, $password, $database);

// Cek koneksi
if ($conn->connect_error) {
  die("Koneksi gagal: " . $conn->connect_error);
}
