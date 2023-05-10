<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "haloklinik";
$conn = mysqli_connect($servername, $username, $password, $dbname);


if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


$sql = "SELECT * FROM monitoring WHERE ditampilkan = 1 LIMIT 1";
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {
  $row = mysqli_fetch_assoc($result);
  $queue_data = "";
  $queue_data .= '<!-- Sedang Diperiksa -->
          <div class="container w-25">
            <div class="row" style="background-color: grey;">
              <h5 class="text-center text-white" style="margin-top: 0.5rem">
                SEDANG DIPERIKSA
              </h5>
            </div>
            <div class="row" style="font-family: \'Manrope\'; height: 200px; background-color: #0A2640">
              <h1 class="text-center text-success" style="color: #4fe9a4; font-size: 450%; margin-top: 3rem; margin-bottom: 4rem;">' . $row["diperiksa"] . '</h1>
            </div>
          </div>
          <div class="container" style="margin-top: 3rem; margin-bottom: 3rem;"></div>';


  $sql_update = "UPDATE monitoring SET ditampilkan = 0 WHERE id = " . $row["id"];
  mysqli_query($conn, $sql_update);
} else {
  $queue_data = "No queue data available.";
}

echo $queue_data;


mysqli_close($conn);
