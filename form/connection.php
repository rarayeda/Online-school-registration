<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname   = "pendaftaran";

try {
    $connect = new PDO(
        "mysql:host=$hostname;dbname=$dbname;charset=utf8",
        $username,
        $password
    );
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("KONEKSI GAGAL: " . $e->getMessage());
}
