<?php
$bill1 = [80, 77, 65, 89, 55, 12, 90, 86];
$bill2 = [77, 99, 55, 81, 45, 90, 91, 98];

// Menggabungkan kedua array menjadi satu array besar
$mergedArray = array_merge($bill1, $bill2);

// Menghapus nilai yang duplikat dari array gabungan
$uniqueArray = array_unique($mergedArray);

// Mengurutkan nilai dari terbesar ke terkecil
rsort($uniqueArray);

// Menampilkan hasil array yang sudah diproses
echo "HASIL DARI: ";
// Menggabungkan elemen-elemen array menjadi string yang dipisahkan oleh koma, kemudian mencetaknya
echo implode(", ", $uniqueArray);
?>
