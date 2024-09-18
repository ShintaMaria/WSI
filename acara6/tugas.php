<?php
// mendefinisikan 2 buah matriks
$A = [
    [1, 1, 1],
    [2, 2, 2],
    [3, 3, 3]
];
$B = [
    [3, 3, 3],
    [2, 2, 2],
    [1, 1, 1]
];
// inisialisasi matriks hasil
$result = [];
// perulangan melalui setiap baris
for ($i = 0; $i < 3; $i++) {
    // perulangan melalui setiap kolom
    for ($j = 0; $j < 3; $j++) {
        $result[$i][$j] = $A[$i][$j] + $B[$i][$j];
    }
}
// menampilkan hasil sebagai matriks
echo "Hasil penjumlahan matriks A dan B adalah:<br>";
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        echo $result[$i][$j] . " ";
    }
    echo "<br>"; // tutup baris matriks
}
?>