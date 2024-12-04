<?php
$servername = "localhost";
$username = "username"; // Ganti dengan username database Anda
$password = "password"; // Ganti dengan password database Anda
$dbname = "database"; // Ganti dengan nama database Anda

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
