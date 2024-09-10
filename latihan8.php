<?php
function getUniqueMajors($input) {
    // Pisahkan string berdasarkan koma dan hapus spasi berlebih
    $majors = array_map('trim', explode(',', $input));
    
    // Gunakan array untuk menyimpan jurusan yang sudah ada
    $uniqueMajors = [];
    
    foreach ($majors as $major) {
        // Ubah ke huruf besar untuk pengecekan unik (case-insensitive)
        $majorUpper = strtoupper($major);
        
        // Cek jika belum ada dalam array uniqueMajors
        if (!in_array($majorUpper, array_map('strtoupper', $uniqueMajors))) {
            $uniqueMajors[] = $major;
        }
    }
    
    return $uniqueMajors;
}

// Contoh penggunaan
$nilai = "PPLG,HTL,KLN,PMN,pplg,htl";
$output = getUniqueMajors($nilai);

// Tampilkan hasil
print_r($output);
?>
