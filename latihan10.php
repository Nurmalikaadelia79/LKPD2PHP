<?php
function cekJawaban($namaSiswa, $jawabanSiswa, $jawabanBenar) {
    $jumlahBenar = 0;
    $jumlahSalah = 0;

    // Iterasi melalui jawaban siswa dan bandingkan dengan jawaban benar
    for ($i = 0; $i < count($jawabanSiswa); $i++) {
        if ($jawabanSiswa[$i] == $jawabanBenar[$i]) {
            $jumlahBenar++;
        } else {
            $jumlahSalah++;
        }
    }

    // Cetak hasil
    echo "Nama: $namaSiswa<br>";
    echo "Jumlah jawaban benar: $jumlahBenar<br>";
    echo "Jumlah jawaban salah: $jumlahSalah<br>";
}

// Data yang diperlukan
$namaSiswa = "Putri";
$jawabanSiswa = ['A','D','C','B','B','A','E','B','A','E'];
$jawabanBenar = ['A','D','C','C','B','A','E','B','A','E'];

// Panggil fungsi untuk mengecek jawaban
cekJawaban($namaSiswa, $jawabanSiswa, $jawabanBenar);
?>
