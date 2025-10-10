<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    $errors = array();

    // Validasi sederhana lainnya bisa ditambahkan di sini
    if (empty($nama)) $errors[] = "Nama harus diisi.";
    if (empty($email)) $errors[] = "Email harus diisi.";

    // Validasi Password
    if (strlen($password) < 8) {
        $errors[] = "Password harus memiliki minimal 8 karakter.";
    }

    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    } else {
        echo "Data berhasil divalidasi dan dikirim.";
    }
}
?>