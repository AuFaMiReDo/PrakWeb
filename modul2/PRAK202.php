<!DOCTYPE html>
<html>
<head>
    <title>Form Input</title>
    <style>
        .error {
            color: red;
            margin-left: 10px;
        }
        .form-group {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <h2>Form Input Data Mahasiswa</h2>
    <form method="post">
        <div class="form-group">
            Nama: <input type="text" name="nama">
            <?php if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($_POST["nama"])): ?>
                <span class="error">* nama tidak boleh kosong</span>
            <?php endif; ?>
        </div>
        <div class="form-group">
            NIM: <input type="text" name="nim">
            <?php if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($_POST["nim"])): ?>
                <span class="error">* nim tidak boleh kosong</span>
            <?php endif; ?>
        </div>
        <div class="form-group">
            Jenis Kelamin:
            <?php if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($_POST["gender"])): ?>
                <span class="error">* jenis kelamin tidak boleh kosong</span>
            <?php endif; ?><br>
            <input type="radio" name="gender" value="Laki-laki"> Laki-Laki
            <input type="radio" name="gender" value="Perempuan"> Perempuan
        
        </div>
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["nama"]) && !empty($_POST["nim"]) && !empty($_POST["gender"])) {
        $nama = $_POST["nama"];
        $nim = $_POST["nim"];
        $gender = $_POST["gender"];

        echo "<h1>Output</h1>";
        echo " $nama<br>";
        echo " $nim<br>";
        echo " $gender<br>";
    }
    ?>
</body>
</html>
