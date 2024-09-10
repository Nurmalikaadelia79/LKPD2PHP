<?php
// Jumlah baris dan bintang per baris
$rows = 4;
$starsPerRow = 8;
$squares = 2;

// Membuat persegi
for ($s = 0; $s < $squares; $s++) { //membuat bintang sebanyak 2x
    for ($i = 0; $i < $rows; $i++) { //membuat 4 baris bintang
        for ($j = 0; $j < $starsPerRow; $j++) {
            echo "*"; //mencetak satu bintang setiap loop berjalan
        }
        echo "<br>";
    }
    echo "<br>"; // Menambah spasi antara dua persegi
}
?>
    