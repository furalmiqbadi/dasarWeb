<?php // Operator Aritmatika
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Hasil Penjumlahan: $hasilTambah <br>";
echo "Hasil Pengurangan: $hasilKurang <br>";
echo "Hasil Perkalian: $hasilKali <br>";
echo "Hasil Pembagian: $hasilBagi <br>";
echo "Sisa Hasil Bagi: $sisaBagi <br>";
echo "Hasil Pangkat: $pangkat <br>";

echo "<br><br>"; // Operator Perbandingan

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;
echo "Apakah a sama dengan b? " . ($hasilSama ? 'true' : 'false') . "<br>";
echo "Apakah a tidak sama dengan b? " . ($hasilTidakSama ? 'true' : 'false') . "<br>";
echo "Apakah a lebih kecil dari b? " . ($hasilLebihKecil ? 'true' : 'false') . "<br>";
echo "Apakah a lebih besar dari b? " . ($hasilLebihBesar ?  'true' : 'false') . "<br>";
echo "Apakah a lebih kecil atau sama dengan b? " . ($hasilLebihKecilSama ? 'true' : 'false') . "<br>";
echo "Apakah a lebih besar atau sama dengan b? " . ($hasilLebihBesarSama ? 'true' : 'false') . "<br>";

echo "<br><br>"; // Operator Logika

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;
echo "Hasil AND (a && b): " . ($hasilAnd ? 'true' : 'false') . "<br>";
echo "Hasil OR (a || b): " . ($hasilOr ? 'true' : 'false') . "<br>";
echo "Hasil NOT a (!a): " . ($hasilNotA ? 'true' : 'false') . "<br>";
echo "Hasil NOT b (!b): " . ($hasilNotB ? 'true' : 'false') . "<br>";

echo "<br><br>"; // Operator Penugasan dan Identitas

$a += $b;
echo "Nilai a setelah penambahan (a += b): $a <br>";
$a -= $b;
echo "Nilai a setelah pengurangan (a -= b): $a <br>";
$a *= $b;
echo "Nilai a setelah perkalian (a *= b): $a <br>";
$a /= $b;
echo "Nilai a setelah pembagian (a /= b): $a <br>";
$a %= $b;
echo "Nilai a setelah sisa bagi (a %= b): $a <br>";


echo "<br><br>"; // Operator Identitas

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "Apakah a identik dengan b? " . ($hasilIdentik ? 'true' : 'false') . "<br>";
echo "Apakah a tidak identik dengan b? " . ($hasilTidakIdentik ? 'true' : 'false') . "<br>";

echo "<br><br>"; //  Ada soal cerita 
// Sebuah restoran memiliki 45 kursi di dalamnya. Pada suatu malam, 28 kursi telah ditempati oleh pelanggan. Berapa persen kursi yang masih kosong di restoran tersebut?

$totalKursi = 45;
$kursiTerisi = 28;
$kursiKosong = $totalKursi - $kursiTerisi;
$persenKursiKosong = ($kursiKosong / $totalKursi) * 100;

echo "Persentase kursi yang masih kosong di restoran tersebut adalah: $persenKursiKosong%";
?>