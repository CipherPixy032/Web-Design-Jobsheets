<?php
$serverName = "DESKTOP-ER5MFRN\SQLEXPRESS";
$database = "prakwebdb";
$username = ""; 
$password = "";

try {
    $koneksi = new PDO("sqlsrv:Server=$serverName;Database=$database", $username, $password);
    $koneksi->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "<div class='alert alert-success'>Database connected successfully</div>";
} catch (PDOException $e) {
    die("Koneksi gagal: " . $e->getMessage());
}
?>


