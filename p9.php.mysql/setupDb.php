<?php
include "koneksi.php"; // Mengambil variabel $Connect 

// Kode untuk Soal no 2 (Membuat tabel)
$query_create = "CREATE TABLE user (
    id INT(11) PRIMARY KEY,
    username VARCHAR(50),
    password VARCHAR(50)
);";

if (mysqli_query($Connect, $query_create)) {
    echo "Tabel 'user' berhasil dibuat.<br>";
} else {
    echo "Error membuat tabel: " . mysqli_error($Connect) . "<br>";
}

// Kode untuk Soal no 3 (Memasukkan data)
$password = md5('123');
$query_insert = "INSERT INTO user (id, username, password)
                VALUES (1, 'admin', '$password');";

if (mysqli_query($Connect, $query_insert)) {
    echo "Data 'admin' berhasil dimasukkan.";
} else {
    echo "Error memasukkan data: " . mysqli_error($Connect);
}

mysqli_close($Connect);
?>