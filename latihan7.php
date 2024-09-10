<?php
// Fungsi untuk memotong kalimat jika lebih dari 50 karakter
function potongKalimat($kalimat) {
    // Cek jika panjang kalimat lebih dari 50 karakter
    if (strlen($kalimat) > 50) {
        // Mengambil 50 karakter pertama dan menambahkan "..." di akhir
        return substr($kalimat, 0, 50) . "..."; 
    } else {
        // Jika kalimat kurang dari atau sama dengan 50 karakter, kembalikan kalimat apa adanya
        return $kalimat;
    }
}

// Kalimat awal yang akan diproses
$kalimatAwal = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos quidem voluptas quibusdam tempora ullam animi praesentium, explicabo a aliquam neque, velit totam.";

// Memanggil fungsi potongKalimat untuk memotong kalimat yang lebih dari 50 karakter
$kalimatDiproses = potongKalimat($kalimatAwal);

// Menampilkan kalimat awal sebelum diproses
echo "Kalimat awal:  $kalimatAwal";
echo "<br> <br>"; // Menambahkan break baris HTML untuk pemisah

// Menampilkan kalimat setelah diproses oleh fungsi potongKalimat
echo "Kalimat setelah diproses: $kalimatDiproses";
?>
