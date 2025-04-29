<?php

$data = [
    [
        "Nama" => "Andi",
        "NIM" => "2101001",
        "UTS" => 87,
        "UAS" => 65
    ],
    [
        "Nama" => "Budi",
        "NIM" => "2101002",
        "UTS" => 76,
        "UAS" => 79
    ],
    [
        "Nama" => "Tono",
        "NIM" => "2101003",
        "UTS" => 50,
        "UAS" => 41
    ],
    [
        "Nama" => "Jessica",
        "NIM" => "2101004",
        "UTS" => 60,
        "UAS" => 75
    ],
];

echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr>
        <th>Nama</th>
        <th>NIM</th>
        <th>Nilai UTS</th>
        <th>Nilai UAS</th>
        <th>Nilai Akhir</th>
        <th>Huruf</th>
      </tr>";

foreach ($data as $mhs) {
    $nilaiAkhir = (0.4 * $mhs["UTS"]) + (0.6 * $mhs["UAS"]);

    if ($nilaiAkhir >= 80) {
        $huruf = "A";
    } elseif ($nilaiAkhir >= 70) {
        $huruf = "B";
    } elseif ($nilaiAkhir >= 60) {
        $huruf = "C";
    } elseif ($nilaiAkhir >= 50) {
        $huruf = "D";
    } else {
        $huruf = "E";
    }

    echo "<tr>";
    echo "<td>{$mhs['Nama']}</td>";
    echo "<td>{$mhs['NIM']}</td>";
    echo "<td>{$mhs['UTS']}</td>";
    echo "<td>{$mhs['UAS']}</td>";
    echo "<td>" . number_format($nilaiAkhir, 1) . "</td>";
    echo "<td>{$huruf}</td>";
    echo "</tr>";
}
echo "</table>";
?>
