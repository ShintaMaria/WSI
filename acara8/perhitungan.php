<!DOCTYPE html>
<html>
<head>
    <title>perhitungan sederhana</title>
</head>
<body>
    <!-- form untuk menerima input dari pengguna -->
    <form method="post">
        Angka pertama:<input type="number" name="angka1" required><br>
        Angka kedua:<input type="number" name="angka2" required><br><br>
        <input type="submit" value="Hitung">
    </form>
    <?php
    // cek apakah form sudah disubmit
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Mengambil nilai dari form menggunakan POST
        $angka1 = $_POST['angka1'];
        $angka2 = $_POST['angka2'];
        // definisikan class kalkulator
        class Kalkulator {
            private $angka1;
            private $angka2;
            // konstruktor
            public function __construct($angka1, $angka2) {
                $this->angka1 = $angka1;
                $this->angka2 = $angka2;
            }
            // method untuk penjumlahan
            public function penjumlahan() {
                return $this->angka1 + $this->angka2;
            }
            // method untuk pengurangan
            public function pengurangan() {
                return $this->angka1 - $this->angka2;
            }
            // method untuk perkalian
            public function perkalian() {
                return $this->angka1 * $this->angka2;
            }
            //  method untuk pembagian
            public function pembagian() {
                return $this->angka1 / $this->angka2;
            }
            
        }
        // membuat objek dari class Kalkulator
        $kalkulator = new Kalkulator($angka1, $angka2);
        echo "<p>$angka1 + $angka2 = " . $kalkulator->penjumlahan() . "</P>";
        echo "<p>$angka1 - $angka2 = " . $kalkulator->pengurangan() . "</p>";
        echo "<p>$angka1 * $angka2 = " . $kalkulator->perkalian() .  "</p>";
        echo "<p>$angka1 / $angka2 = " . $kalkulator->pembagian() . "</p>";
    }
    ?>

</body>
</html>
