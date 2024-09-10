<?php
$barang = [
    [
        'nama_barang' => 'pasta gigi',
        'harga_barang' => 18000,
        'jumlah_beli' => 1,
    ],
    [
        'nama_barang' => 'sabun mandi',
        'harga_barang' => 5000,
        'jumlah_beli' => 3,
    ],
    [
        'nama_barang' => 'Aloe vera sheet masker',
        'harga_barang' => 15000,
        'jumlah_beli' => 4,
    ],
];

// Menampilkan daftar belanjaan
echo "Daftar belanjaan:<br>";

//menyimpan total semua harga barang 
$total = 0;
$index = 1; //variabel penemoran item daftar

//mengiterasi item dalam array
foreach ($barang as $item) {
    $nama_barang = $item['nama_barang'];
    $harga_barang = $item['harga_barang'];
    $jumlah_beli = $item['jumlah_beli'];
    
    //menghitung subtotal
    $subtotal = $harga_barang * $jumlah_beli;
    $total += $subtotal;
    
    // Menampilkan item
    echo "$index. $nama_barang ($jumlah_beli) : " . number_format($subtotal, 0, ',', '.') . "<br>";
    $index++;
}

// Menampilkan total harga
echo "Total harga yang harus dibayar: " . number_format($total, 0, ',', '.');
?>
