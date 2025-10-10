<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $selectedBuah = $_POST['buah'] ?? 'tidak dipilih';
    
    $selectedWarna = [];
    if (isset($_POST['warna'])) {
        $selectedWarna = $_POST['warna'];
    }
    
    $selectedJenisKelamin = $_POST['jenis_kelamin'] ?? 'tidak dipilih';

    echo "Anda memilih buah: " . htmlspecialchars($selectedBuah) . "<br>";
    
    if (!empty($selectedWarna)) {
        echo "Warna favorit Anda: " . implode(", ", array_map('htmlspecialchars', $selectedWarna)) . "<br>";
    } else {
        echo "Anda tidak memilih warna favorit.<br>";
    }
    
    echo "Jenis kelamin Anda: " . htmlspecialchars($selectedJenisKelamin);
}
?>