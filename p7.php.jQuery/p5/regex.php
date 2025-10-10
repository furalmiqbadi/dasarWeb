<?php
// 5.1
$pattern = '/[a-z]/'; // Cocokkan huruf kecil.
$text = 'This is a Sample Text.';
if (preg_match($pattern, $text)) {
    echo "Huruf kecil ditemukan!";
} else {
    echo "Tidak ada huruf kecil!";
}

echo "<br><br>";

// 5.2
$pattern = '/[0-9]+/'; // Cocokkan satu atau lebih digit.
$text = 'There are 123 apples.';
if (preg_match($pattern, $text, $matches)) {
    echo "Cocokkan: " . $matches[0] . "";
} else {
    echo "Tidak ada yang cocok!";
}

echo "<br><br>";

// 5.3
$pattern = '/apple/';
$replacement = 'banana';
$text = 'I like apple pie.';
$new_text = preg_replace($pattern, $replacement, $text);
echo $new_text;

echo "<br><br>";

// 5.4
$pattern = '/go*d/'; // Cocokkan "gd", "god", "good", dll.
$text = 'god is good.';
if (preg_match($pattern, $text, $matches)) {
    echo "Cocokkan: " . $matches[0];
} else {
    echo "Tidak ada yang cocok!";
}

echo "<br><br>";

// 5.5
$pattern = '/go?d/'; // Cocokkan "gd" atau "god".
$text = 'god is good.';
if (preg_match($pattern, $text, $matches)) {
    echo "Cocokkan: " . $matches[0];
} else {
    echo "Tidak ada yang cocok!";
}

echo "<br><br>";

// 5.6
$pattern = '/go{1,2}d/'; // Cocokkan "god" atau "good".
$text = 'god is good.';
if (preg_match_all($pattern, $text, $matches)) {
    echo "Cocokkan ditemukan: " . implode(', ', $matches[0]); // Menampilkan semua kecocokan
} else {
    echo "Tidak ada yang cocok!";
}
?>