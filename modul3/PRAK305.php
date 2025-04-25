<!DOCTYPE html>
<html>
<head>
    <title>PRAK305 - Ulang Karakter</title>
</head>
<body>
    <form method="POST">
        Masukkan String: <input type="text" name="input_str"><br>
        <input type="submit" value="Cetak Karakter">
    </form>
    <hr>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $input = $_POST['input_str'];
        $panjang = strlen($input);

        echo "<h3>Input:</h3>";
        echo "<p>$input</p>";

        echo "<h3>Output:</h3>";
        for ($i = 0; $i < $panjang; $i++) {
            $karakter = $input[$i];
            $karakter_kapital = strtoupper($karakter);
            $karakter_kecil = strtolower($karakter); 

            echo $karakter_kapital;
            for ($j = 0; $j < $panjang - 1; $j++) {
                echo $karakter_kecil;
            }
            echo " ";
        }
    }
    ?>
</body>
</html>
