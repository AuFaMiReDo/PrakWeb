<!DOCTYPE html>
<html>
<head>
    <title>Konversi Suhu</title>
</head>
<body>
    <form method="post">
        Nilai: <input type="number" name="nilai" required><br>
        Dari:<br>
        <input type="radio" name="dari" value="C" required> Celcius<br>
        <input type="radio" name="dari" value="F"> Fahrenheit<br>
        <input type="radio" name="dari" value="Re"> Reamur<br>
        <input type="radio" name="dari" value="K"> Kelvin<br><br>
        Ke:<br>
        <input type="radio" name="ke" value="C" required> Celcius<br>
        <input type="radio" name="ke" value="F"> Fahrenheit<br>
        <input type="radio" name="ke" value="Re"> Reamur<br>
        <input type="radio" name="ke" value="K"> Kelvin<br><br>
        <input type="submit" value="Konversi">
    </form>

    <?php
    function konversiSuhu($nilai, $dari, $ke) {
        $c = 0; // Variabel untuk menyimpan nilai dalam Celcius
        switch ($dari) {
            case 'C':
                $c = $nilai;
                break;
            case 'F':
                $c = ($nilai - 32) * 5/9;
                break;
            case 'Re':
                $c = $nilai * 5/4;
                break;
            case 'K':
                $c = $nilai - 273.15;
                break;
        }

        switch ($ke) {
            case 'C':
                return $c;
            case 'F':
                return ($c * 9/5) + 32;
            case 'Re':
                return $c * 4/5;
            case 'K':
                return $c + 273.15;
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nilai = $_POST["nilai"];
        $dari = $_POST["dari"];
        $ke = $_POST["ke"];

        $hasil = konversiSuhu($nilai, $dari, $ke);
        echo "<h3>Hasil Konversi: " . round($hasil, 2) . " $ke</h3>";
    }
    ?>
</body>
</html>
