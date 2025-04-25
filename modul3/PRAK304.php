<!DOCTYPE html>
<html>
<head>
    <title>PRAK304 - Tambah Kurang Bintang</title>
</head>
<body>
    <?php
    if (!isset($_GET['jumlah'])) {
        ?>
        <form method="GET">
            Jumlah bintang: <input type="number" name="jumlah" min="0"><br>
            <input type="submit" value="Submit">
        </form>
        <?php
    } else {
        $jumlah = (int)$_GET['jumlah'];

        if (isset($_GET['tambah'])) {
            $jumlah++;
        }

        if (isset($_GET['kurang'])) {
            $jumlah--;
            if ($jumlah < 0) $jumlah = 0; 
        }
        ?>
 
        <p>Jumlah bintang <?= $jumlah ?></p>

        <form method="GET">
            <input type="hidden" name="jumlah" value="<?= $jumlah ?>">
            <input type="submit" name="tambah" value="Tambah">
            <input type="submit" name="kurang" value="Kurang">
        </form>

        <hr>

        <?php
        for ($i = 0; $i < $jumlah; $i++) {
            echo "<img src='star-images-9441.png' width='50'>";
        }
    }
    ?>
</body>
</html>
