<?php
echo "MEMBUAT FUNGSI <br>";
// mendefinisikan fungsi berhasil
function berhasil() {
    echo "SELAMAT ANDA BERHASIL";
}
// mendefinisikan fungsi gagal
function gagal() {
    echo "MAAF ANDA GAGAL";
}

$nilai = 90;
if ($nilai >= 75) {
    // jika $nilai lebih besar atau sama dengan 75, panggil fungsi berhasil
    berhasil();
} else {
    // jika tidak, panggil fungsi gagal
    gagal();
}
echo "<br>";
echo "FUNGSI DENGAN PARAMETER<br>";
// mendefinisikan fungsi jumlah dengan 2 parameter
function jumlah($a, $b) {
    return $a + $b; // mengembalikan hasil penjumlahan $a dan $b
}
$nilai1 = 10;
$nilai2 = 15;
echo jumlah($nilai1, $nilai2); // menampilkan hasil penjumlahan dari $nilai1 dan $nilai2
echo "<br>";
echo "FUNGSI BAWAAN<br>";
// mengambil informasi tanggal dan waktu saat ini
$sekarang = getdate();
print_r($sekarang); // menampilkan array dengan informasi tanggal dan waktu saat ini
echo "<br>";
// menampilkan elemen hari dari array tanggal
echo "Sekarang Tanggal :" . $sekarang["mday"];
?>
