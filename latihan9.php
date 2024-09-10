<?php
function hitungKoin($jumlahUang) {
    // Jenis koin yang tersedia
    $koinTersedia = [1000, 500, 200]; // Menambahkan koin Rp 1000 dan menghapus Rp 50
    $hasil = [];

    // Lakukan perhitungan
    foreach ($koinTersedia as $koin) {
        if ($jumlahUang >= $koin) {
            $jumlahKoin = floor($jumlahUang / $koin);
            $hasil[$koin] = $jumlahKoin;
            $jumlahUang -= $jumlahKoin * $koin; // Dikurangi dengan nilai total dari koin yang sudah digunakan
        } 
    }

    // Kembalikan hasil tanpa sisa
    return $hasil;
}

// Contoh penggunaan
$jumlahUang = 1750;
$hasil = hitungKoin($jumlahUang);

// Cetak hasil
echo "Untuk Rp. $jumlahUang, diperlukan:<br>";
foreach ($hasil as $koin => $jumlah) {
    echo "$jumlah koin Rp. $koin<br>";
}
?>
