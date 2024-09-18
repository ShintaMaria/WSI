<?php
$nilai = 90; // inisialisasi variabel dengan nilai 90
// bagian IF ELSE
echo "CONTOH IF ELSE <br>";
if ($nilai > 80) { 
    // jika nilai lebih dari 80, tampilkan pesan grade A
    echo "Selamat Anda mendapat grade A <br>";
} else { 
    // jika tidak, tampilkan pesan belum dapat grade A
    echo "Maaf Anda belum dapat grade A <br>";
}
// bagian SWITCH
echo "CONTOH SWITCH <br>";
switch ($nilai) {
    case 100:
        // jika nilai 100, tampilkan pesan
        echo "Nilai yang dipilih 100 <br>";
        break;
    case 90:
        // jika nilai 90, tampilkan pesan
        echo "Nilai yang dipilih 90 <br>";
        break;
}
// bagian FOR
echo "CONTOH FOR <br>";
for ($i = 1; $i <= 5; $i++) {
    // loop dari 1 hingga 5, menampilkan setiap iterasi
    echo "Looping FOR ke : " . $i . "<br>";
}   
// bagian WHILE
echo "CONTOH WHILE <br>";
$j = 1;
while ($j <= 5) {
    // loop selama $j kurang dari atau sama dengan 5, menampilkan setiap iterasi
    echo "Looping While ke : " . $j . "<br>";
    $j++; // Increment $j
}
?>
