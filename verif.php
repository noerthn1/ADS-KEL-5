<?php
// Membuat class Database
class Database
{
   // Deklarasi property untuk menyimpan informasi server, username, password, dan nama database
  private $servername;
  private $username;
  private $password;
  private $dbname;
    // Property untuk menyimpan koneksi ke database
  private $conn;

  // Konstruktor class Database
  function __construct($servername, $username, $password, $dbname)
  {
    $this->servername = $servername;
    $this->username = $username;
    $this->password = $password;
    $this->dbname = $dbname;
  }
   // Method untuk melakukan koneksi ke database
  function connect()
  {
    // Membuat objek mysqli dengan parameter informasi server, username, password, dan nama database
    $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
     // Jika koneksi gagal, maka hentikan program dan tampilkan pesan error
    if ($this->conn->connect_error) {
      die("Connection failed: " . $this->conn->connect_error);
    }
  }
   // Method untuk memvalidasi data yang dikirim melalui form
  function validateForm($rekam_medis, $tgl_lahir, $nama_lengkap, $status, $tgl_reservasi, $jadwal_sesi)
  {
      // Membuat array untuk menyimpan nama field yang wajib diisi
    $required_fields = array("rekam_medis", "tgl_lahir", "nama_lengkap", "status", "tgl_reservasi", "jadwal_sesi");

     // Melakukan pengecekan setiap field, jika ada field yang kosong, maka hentikan program dan tampilkan pesan error
    foreach ($required_fields as $field) {
      if (empty($_POST[$field])) {
        die("Error: $field is required.");
      }
    }
  }
    // Method untuk memasukkan data ke dalam database
  function insertData($rekam_medis, $tgl_lahir, $nama_lengkap, $status, $tgl_reservasi, $jadwal_sesi)
  {
      // Membuat query SQL untuk memasukkan data ke dalam tabel reservasi
    $sql = "INSERT INTO daftar (rekam_medis, tgl_lahir, nama_lengkap, status, tgl_reservasi, jadwal_sesi)
    VALUES ('$rekam_medis', '$tgl_lahir', '$nama_lengkap', '$status', '$tgl_reservasi', '$jadwal_sesi')";
    if ($this->conn->query($sql) === TRUE) {

    
      // Jika query berhasil dijalankan, maka tampilkan pesan sukses dan redirect ke halaman reservasi2.php
      header('Location: reservasi2.php');
      exit;
       // Jika query gagal dijalankan, maka tampilkan pesan error
    } else {
      echo "Error: " . $sql . "<br>" . $this->conn->error;
    }
  }
   // Method untuk menutup koneksi ke database
  function closeConnection()
  {
    $this->conn->close();
  }
}

// Buat Database object
$db = new Database("localhost", "root", "", "haloklinik");

// Connect ke database
$db->connect();

// Ambil form data
$rekam_medis = $_POST['rekam_medis'];
$tgl_lahir = $_POST['tgl_lahir'];
$nama_lengkap = $_POST['nama_lengkap'];
$status = $_POST['status'];
$tgl_reservasi = $_POST['tgl_reservasi'];
$jadwal_sesi = $_POST['jadwal_sesi'];

// Validasi form data
$db->validateForm($rekam_medis, $tgl_lahir, $nama_lengkap, $status, $tgl_reservasi, $jadwal_sesi);

// Insert form data ke database
$db->insertData($rekam_medis, $tgl_lahir, $nama_lengkap, $status, $tgl_reservasi, $jadwal_sesi);

// Tutup Database
$db->closeConnection();
