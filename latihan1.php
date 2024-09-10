<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>No 1</title>
</head>
<body>
    <form action="" method="POST">
        <label for="teks">Masukkan teks:</label>
        <input type="text" name="teks" id="teks">
        <input type="submit" value="Hitung">
    </form>

    <?php
    //memeriksa permintaan http 
    if ($_SERVER['REQUEST_METHOD'] == "POST") {  
        // Mengambil input dari form
        $teks = $_POST["teks"];
        
        // Mengambil simbol dengan ekspresi reguler
        $simbol = preg_replace('/[\w\s]/', '', $teks);
        
        // Memeriksa dan menampilkan hasil
        if ($simbol) {
            $arrSimbol = str_split($simbol, 1);
            echo "Karakter yang terdapat pada kalimat : " . implode( $arrSimbol);
        } else {
            echo "Tidak terdapat simbol pada kalimat.";
        }
    }
    ?>
</body>
</html>