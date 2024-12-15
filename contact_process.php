<?php
include 'db_config.php'; // Koneksi ke database

$response = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Ambil data dari form
  $name = isset($_POST['full_name']) ? $_POST['full_name'] : '';
  $email = isset($_POST['email']) ? $_POST['email'] : '';
  $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
  $subject = isset($_POST['subject']) ? $_POST['subject'] : '';
  $message = isset($_POST['message']) ? $_POST['message'] : '';

  // Validasi email
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $response = "Alamat email tidak valid!";
  } else if (!empty($name) && !empty($email) && !empty($message)) {
    // Menggunakan prepared statement untuk keamanan
    $stmt = $conn->prepare("INSERT INTO contacts (full_name, email, phone, subject, message) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $name, $email, $phone, $subject, $message);

    if ($stmt->execute()) {
      // Kirim email ke pemilik situs
      $to = "namaemailanda@gmail.com"; // Email Anda
      $headers = "From: $email";
      $fullMessage = "Name: $name\nEmail: $email\nPhone: $phone\nMessage:\n$message";

      if (mail($to, $subject, $fullMessage, $headers)) {
        $response = "Pesan Anda berhasil dikirim!";
        echo "<script>alert('Pesan Anda berhasil dikirim!'); window.location.href = 'index.php';</script>";
      } else {
        $response = "Pesan tersimpan, tetapi gagal mengirim email.";
      }
    } else {
      $response = "Terjadi kesalahan: " . $stmt->error;
    }
    $stmt->close();
  } else {
    $response = "Semua field harus diisi!";
  }
}
$conn->close();
