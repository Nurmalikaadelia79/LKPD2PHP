<?php
$number = 90;

// Loop dari 1 hingga 30
for ($num = 1; $num <= 30; $num++) { //  // Mengecek apakah $number habis dibagi dengan $num
    if ($number % $num == 0) { // Mengecek apakah $number habis dibagi dengan $num
        $result = $number / $num; // Menyimpan hasil pembagian di variabel $result
        echo "$number : $num = $result<br>"; // // Menampilkan hasil dalam format: number:num=result
    }
}
?>
