<!DOCTYPE html>
<html>
<head>
    <title>PRAK303 - Deret dan Gambar Bintang</title>
</head>
<body>
    <form method="POST">
        Batas Bawah: <input type="number" name="bawah"><br>
        Batas Atas: <input type="number" name="atas"><br>
        <input type="submit" value="Cek Deret">
    </form>
    <hr>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $bawah = $_POST['bawah'];
        $atas = $_POST['atas'];
        $i = $bawah;

        // Perulangan do-while untuk mencetak deret
        do {
            if ((($i + 7) % 5) == 0) {
                // Jika bilangan ditambah 7 adalah kelipatan 5, tampilkan gambar bintang
                echo "<img src='star-images-9441.png' width='20'>";
            } else {
                // Jika tidak, tampilkan bilangan
                echo "$i ";
            }
            $i++;
        } while ($i <= $atas); // Perulangan berjalan hingga batas atas
    }
    ?>
</body>
</html>
