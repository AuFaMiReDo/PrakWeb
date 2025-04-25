<!DOCTYPE html>
<html>
<head>
    <title>PRAK302 - Segitiga Gambar</title>
</head>
<body>
    <form method="POST">
        Tinggi Segitiga: <input type="number" name="tinggi"><br>
        URL Gambar: <input type="text" name="gambar" value="https://cdn0.iconfinder.com/data/icons/web-and-mobile-icons-volume-2/128/52-512.png"><br>
        <input type="submit" value="Tampilkan">
    </form>
    <hr>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $tinggi = $_POST['tinggi'];
        $gambar = $_POST['gambar'];
        $baris = $tinggi;
        while ($baris >= 1) {
            // Tambahkan spasi kosong untuk menggeser gambar ke kanan
            $spasi = $tinggi - $baris;
            $i = 1;
            while ($i <= $spasi) {
                echo "<span style='display:inline-block; width:30px;'></span>";
                $i++;
            }
            // Cetak gambar
            $i = 1;
            while ($i <= $baris) {
                echo "<img src='$gambar' width='30'>";
                $i++;
            }
            echo "<br>";
            $baris--;
        }
    }
    ?>
</body>
</html>
