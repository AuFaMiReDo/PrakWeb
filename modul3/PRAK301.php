<!DOCTYPE html>
<html>
<head>
    <title>PRAK301 - Perulangan While (Enhanced)</title>
</head>
<body>
    <form method="POST">
        Masukkan jumlah peserta: <input type="number" name="jumlah"><br>
        <input type="submit" value="Cetak">
    </form>
    <hr>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $jumlah = $_POST['jumlah'];
    $i = 1;
    while ($i <= $jumlah) {
        $warna = ($i % 2 == 0) ? "green" : "red";
        echo "<h2 style='color:$warna;'>Peserta ke-$i</h2>";
        $i++;
    }
}
?>
</body>
</html>
