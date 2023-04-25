<?php
// Connect database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "haloklinik";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Ambil form data
$rekam_medis = $_POST['rekam_medis'];
$tgl_lahir = $_POST['tgl_lahir'];
$nama_lengkap = $_POST['nama_lengkap'];
$status = $_POST['status'];
$tgl_reservasi = $_POST['tgl_reservasi'];
$jadwal_sesi = $_POST['jadwal_sesi'];

// Insert form data ke database
$sql = "INSERT INTO reservasi (rekam_medis, tgl_lahir, nama_lengkap, status, tgl_reservasi, jadwal_sesi)
VALUES ('$rekam_medis', '$tgl_lahir', '$nama_lengkap', '$status', '$tgl_reservasi', '$jadwal_sesi')";
if ($conn->query($sql) === TRUE) {
  // redirect to a success page
  header('Location: reservasi2.php');
  exit;
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
