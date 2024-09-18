<?php
// fungsi untuk menentukan bilangan terbesar dari dua bilangan
function bilanganTerbesar($a, $b) {
    if ($a > $b) {
        return $a;
    } else {
        return $b;
    }
}
// penggunaan fungsi
$bilangan1 = 170;
$bilangan2 = 300;
$terbesar = bilanganTerbesar($bilangan1, $bilangan2);
echo "Bilangan terbesar dari $bilangan1 dan $bilangan2 adalah: $terbesar<br>";
// menampilkan tanggal, bulan, dan tahun sekarang menggunakan getdate()
$tanggalSekarang = getdate();
echo "Tanggal sekarang : " . $tanggalSekarang['mday'] . "-" . $tanggalSekarang['mon'] . "-" . $tanggalSekarang['year'] . "<br>";
// menampilkan tanggal, bulan, dan tahun sekarang menggunakan date()
echo "Tanggal saat ini : " . date('d-F-Y')."<br>";
?>