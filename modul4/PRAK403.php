<?php
$data = [
    [
        "Nama" => "Ridho",
        "Matkul" => [
            ["nama" => "Pemrograman I", "sks" => 2],
            ["nama" => "Praktikum Pemrograman I", "sks" => 1],
            ["nama" => "Pengantar Lingkungan Lahan Basah", "sks" => 2],
            ["nama" => "Arsitektur Komputer", "sks" => 3],
        ]
    ],
    [
        "Nama" => "Ratna",
        "Matkul" => [
            ["nama" => "Basis Data I", "sks" => 2],
            ["nama" => "Praktikum Basis Data I", "sks" => 1],
            ["nama" => "Kalkulus", "sks" => 3],
        ]
    ],
    [
        "Nama" => "Tono",
        "Matkul" => [
            ["nama" => "Rekayasa Perangkat Lunak", "sks" => 3],
            ["nama" => "Analisis dan Perancangan Sistem", "sks" => 3],
            ["nama" => "Komputasi Awan", "sks" => 3],
            ["nama" => "Kecerdasan Bisnis", "sks" => 3],
        ]
    ],
];

echo "<table border='1' cellpadding='5' cellspacing='0' style='border-collapse: collapse; text-align: center;'>";
echo "<tr>
        <th>No</th>
        <th>Nama</th>
        <th>Mata Kuliah diambil</th>
        <th>SKS</th>
        <th>Total SKS</th>
        <th>Keterangan</th>
      </tr>";

$no = 1;
foreach ($data as $mhs) {
    $jumlahMatkul = count($mhs["Matkul"]);
    $totalSKS = 0;
    foreach ($mhs["Matkul"] as $matkul) {
        $totalSKS += $matkul["sks"];
    }
    $keterangan = ($totalSKS < 7) ? "Revisi KRS" : "Tidak Revisi";
    $warna = ($totalSKS < 7) ? "style='background-color: red; color: white;'" : "style='background-color: green; color: white;'";

    $firstRow = true;
    foreach ($mhs["Matkul"] as $matkul) {
        echo "<tr>";
        if ($firstRow) {
            echo "<td {$jumlahMatkul}'>{$no}</td>";
            echo "<td {$jumlahMatkul}'>{$mhs['Nama']}</td>";
        }else{
            echo "<td></td>";
            echo "  <td></td>";
        }
        echo "<td>{$matkul['nama']}</td>";
        echo "<td>{$matkul['sks']}</td>";
        if($firstRow){  
        
            echo "<td {$jumlahMatkul}'>{$totalSKS}</td>";
            echo "<td {$jumlahMatkul}' {$warna}>{$keterangan}</td>";
            $firstRow = false;
        } else {
            echo "<td></td>";
            echo "<td></td>";

        }
        echo "</tr>";
    }
    $no++;
}
echo "</table>";
?>
