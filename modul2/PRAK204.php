<!DOCTYPE html>
<html>
<head>
    <title>Ejaan Bilangan</title>
</head>
<body>
    <form method="post">
        Nilai: <input type="number" name="bilangan" min="0" ><br>
        <input type="submit" value="Konversi">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $bilangan = $_POST["bilangan"];

       if ($bilangan == 0) {
            echo "<h1>Nol</h1>";
        } elseif ($bilangan < 10) {
            echo "<h1>Hasil:Satuan</h1>";
        } elseif ($bilangan < 20) {
            echo "<h1>Hasil:Belasan</h1>";
        } elseif ($bilangan < 100) {
            echo "<h1>Hasil:Puluhan</h1>";
        } elseif ($bilangan < 1000) {
            echo "<h1>Hasil:Ratusan</h1>";
        } else {
            echo "<h1>Anda Menginput Melebihi Limit Bilangan</h1>";
        }
    }
    ?>
</body>
</html>
