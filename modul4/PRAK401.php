<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Matrix</title>
</head>
<body>
    <form method="POST">
        <label for="panjang">Panjang:</label>
        <input type="number" id="panjang" name="panjang" required><br><br>

        <label for="lebar">Lebar:</label>
        <input type="number" id="lebar" name="lebar" required><br><br>

        <label for="nilai">Nilai:</label>
        <input type="text" id="nilai" name="nilai"  required><br><br>

        <button type="submit">Cetak</button>
    </form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $panjang = intval($_POST['panjang']);
    $lebar = intval($_POST['lebar']);

    $nilaiArray = explode(" ", trim($input));


    if (count($nilaiArray) != $panjang * $lebar) {
        echo "Panjang nilai tidak sesuai dengan ukuran matriks. Harus ada " . ($panjang * $lebar) . " nilai.";
    } elseif (!ctype_digit(str_replace(" ", "", $input))) {
        echo "Input nilai hanya boleh berisi angka yang dipisahkan oleh spasi.";
    } else {
        $index = 0;
        echo "<table border='1' cellpadding='10' cellspacing='0' style='border-collapse: collapse; text-align: center;'>";
        for ($i = 0; $i < $panjang; $i++) {
            echo "<tr>";
            for ($j = 0; $j < $lebar; $j++) {
                echo "<td>" . $nilaiArray[$index] . "</td>";
                $index++;
            }
            echo "</tr>";
        }
        echo "</table>";
    }
}
?>