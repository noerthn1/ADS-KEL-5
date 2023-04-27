<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "haloklinik";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the form has been submitted
if (isset($_POST['submit'])) {
    // Get the selected date and session
    $date = $_POST['date'];
    $session = $_POST['session'];

    // Fetch jadwal dari database
    $sql = "SELECT * FROM jadwal WHERE tanggal='$date' AND sesi='$session'";
    $result = mysqli_query($conn, $sql);

    // Menampilkan jadwal di tabel
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['poli'] . "</td>";
        echo "<td>" . $row['tanggal'] . "</td>";
        echo "<td>" . $row['kuota'] . "</td>";
        echo "</tr>";
    }
}

// Close the database connection
mysqli_close($conn);
