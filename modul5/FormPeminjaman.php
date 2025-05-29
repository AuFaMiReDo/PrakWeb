<?php
require 'Model.php';

$id = "";
$id_member = "";
$id_buku = "";
$tgl_pinjam = "";
$tgl_kembali = "";

// Cek jika sedang mengedit data
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = mysqli_fetch_assoc(mysqli_query(koneksiDB(), "SELECT * FROM peminjaman WHERE id_peminjaman = $id"));
    if ($result) {
        $id_member = $result['id_member'];
        $id_buku = $result['id_buku'];
        $tgl_pinjam = $result['tgl_pinjam'];
        $tgl_kembali = $result['tgl_kembali'];
    }
}

// Saat form disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = [
        "id_member" => $_POST['id_member'],
        "id_buku" => $_POST['id_buku'],
        "tgl_pinjam" => $_POST['tgl_pinjam'],
        "tgl_kembali" => $_POST['tgl_kembali']
    ];

    if ($_POST['id'] === "") {
        insertData("peminjaman", $data);
    } else {
        updateData("peminjaman", $data, $_POST['id'], "id_peminjaman");
    }

    header("Location: Peminjaman.php");
}

// Ambil daftar member dan buku untuk dropdown
$members = getData("member");
$buku = getData("buku");
?>

<h2>Form Peminjaman</h2>
<form method="post">
    <input type="hidden" name="id" value="<?= $id ?>">

    Member:
    <select name="id_member" required>
        <option value="">-- Pilih Member --</option>
        <?php while ($m = mysqli_fetch_assoc($members)) { ?>
            <option value="<?= $m['id_member'] ?>" <?= $m['id_member'] == $id_member ? 'selected' : '' ?>>
                <?= $m['nama'] ?>
            </option>
        <?php } ?>
    </select><br>

    Buku:
    <select name="id_buku" required>
        <option value="">-- Pilih Buku --</option>
        <?php while ($b = mysqli_fetch_assoc($buku)) { ?>
            <option value="<?= $b['id_buku'] ?>" <?= $b['id_buku'] == $id_buku ? 'selected' : '' ?>>
                <?= $b['judul'] ?>
            </option>
        <?php } ?>
    </select><br>

    Tanggal Pinjam: <input type="date" name="tgl_pinjam" value="<?= $tgl_pinjam ?>" required><br>
    Tanggal Kembali: <input type="date" name="tgl_kembali" value="<?= $tgl_kembali ?>"><br>

    <input type="submit" value="Simpan">
</form>
