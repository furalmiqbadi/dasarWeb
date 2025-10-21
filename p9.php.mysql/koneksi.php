<?php
$servername = "localhost";
$username = "root"; // Ganti dari "username"
$password = ""; // Ganti dari "password"
$database = "prakwebdb"; // Tambahkan nama database

// Create connection
$connect = new mysqli($servername, $username, $password, $database);

// Check connection
if ($connect->connect_error) {
  die("Connection failed: " . $connect->connect_error);
}
// Anda bisa menghapus baris "echo" di bawah ini setelah koneksi berhasil
// echo "Connected successfully";
?>