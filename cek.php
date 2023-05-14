<?php

// Membuat kelas Connection
class Connection
{
    private $servername;
    private $username;
    private $password;
    private $dbname;
    private $conn;

    // Konstruktor kelas Connection, yang akan membuat koneksi ke database
    public function __construct($servername, $username, $password, $dbname)
    {
        $this->servername = $servername;
        $this->username = $username;
        $this->password = $password;
        $this->dbname = $dbname;

        // Membuat objek koneksi mysqli
        $this->conn = new mysqli($servername, $username, $password, $dbname);

        // Jika koneksi gagal, tampilkan pesan error
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    // Metode close() untuk menutup koneksi ke database
    public function close()
    {
        $this->conn->close();
    }

    // Metode query() untuk menjalankan query SQL pada database
    public function query($sql)
    {
        return $this->conn->query($sql);
    }
}

// Membuat kelas Schedule untuk mencari jadwal dokter pada database
class Schedule
{
    private $connection;

    // Konstruktor kelas Schedule
    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    // Metode find() untuk mencari jadwal dokter berdasarkan tanggal dan sesi
    public function find($date, $session)
    {
        $sql = "SELECT * FROM kuota WHERE tanggal='$date' AND sesi='$session'";
        return $this->connection->query($sql);
    }
}

// Mengisi variabel untuk koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "haloklinik";

// Membuat objek Connection untuk melakukan koneksi ke database
$connection = new Connection($servername, $username, $password, $dbname);

// Jika tombol submit pada form diklik
if (isset($_POST['submit'])) {
    // Mendapatkan tanggal dan sesi yang dipilih
    $date = $_POST['date'];
    $session = $_POST['session'];

    // Membuat objek Schedule untuk mencari jadwal dokter
    $schedule = new Schedule($connection);

    // Menjalankan query untuk mencari jadwal dokter
    $result = $schedule->find($date, $session);

    // Jika hasil query mengembalikan baris
    if ($result->num_rows > 0) {
        // Tampilkan hasil query pada tabel HTML
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['poli'] . "</td>";
            echo "<td>" . date('d-m-Y', strtotime($row['tanggal'])) . "</td>";  
            echo "<td>" . $row['kuota'] . "</td>";
            echo "</tr>";
        }
    } else {
        // Jika hasil query tidak mengembalikan baris, tampilkan pesan
        echo "<tr><td colspan='3'>Jadwal Tidak Ditemukan</td></tr>";
    }
}

// Menutup koneksi ke database
$connection->close();
