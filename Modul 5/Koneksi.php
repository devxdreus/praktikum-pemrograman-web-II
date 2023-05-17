<?php
$DBHOST = "localhost";
$DBNAME = "web2_5";
$USERNAME = "root";
$PASSWORD = "";
try {
  $conn = new PDO(
    "mysql:host=$DBHOST;dbname=$DBNAME",
    $USERNAME,
    $PASSWORD
  );
} catch (\Throwable $e) {
  echo "Koneksi Gagal, " . $e->getMessage();
}
