<?php
// Lokasi penyimpanan file yang diunggah
$targetDirectory = "uploads/";

// Periksa apakah direktori penyimpanan ada, jika tidak maka buat
if (!file_exists($targetDirectory)) {
    mkdir($targetDirectory, 0777, true);
}

if (!empty($_FILES['files']['name'][0])) {
    $totalFiles = count($_FILES['files']['name']);
    $allowedExtensions = array("jpg", "jpeg", "png", "gif"); // Khusus gambar

    for ($i = 0; $i < $totalFiles; $i++) {
        $fileName = $_FILES['files']['name'][$i];
        $fileTmp = $_FILES['files']['tmp_name'][$i];
        $fileType = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
        $targetFile = $targetDirectory . $fileName;

        if (in_array($fileType, $allowedExtensions)) {
            if (move_uploaded_file($fileTmp, $targetFile)) {
                echo "File $fileName berhasil diunggah.<br>";

                echo "<img src='$targetFile' width='200' style='height:auto; border:1px solid #ccc; margin:5px;'><br>";
            } else {
                echo "Gagal mengunggah file $fileName.<br>";
            }
        } else {
            echo "File $fileName tidak valid (hanya boleh jpg, jpeg, png, gif).<br>";
        }
    }
} else {
    echo "Tidak ada file yang diunggah.";
}
?>
