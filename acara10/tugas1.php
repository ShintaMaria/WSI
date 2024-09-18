<?php
// Class induk
class mobilLengkap {
    public function nontonTV() {
        echo "TV dihidupkan, mencari channel, menampilkan gambar.\n";
    }
    public function hidupkanMobil() {
        echo "Mobil dihidupkan.\n";
    }
    public function matikanMobil() {
        echo "Mobil dimatikan.\n";
    }
    public function ubahGigi($gigi) {
        echo "Mobil ubah ke gigi $gigi.\n";
    }
}

// Class turunan
class MobilBMW extends mobilLengkap {}

// Class aksi
class MobilBMWberaksi {
    public function nontonTv() {
        (new MobilBMW())->nontonTV();
    }

    public function hidupkanMobil() {
        (new MobilBMW())->hidupkanMobil();
    }

    public function matikanMobil() {
        (new MobilBMW())->matikanMobil();
    }

    public function ubahGigi($gigi) {
        (new MobilBMW())->ubahGigi($gigi);
    }
}

// Eksekusi
$aksi = new MobilBMWberaksi();
$aksi->nontonTv();
$aksi->hidupkanMobil();
$aksi->ubahGigi(3);
$aksi->matikanMobil();
?>
