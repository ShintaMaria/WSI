<?php
// Class induk
class ItemProduk {
    public $ukuran, $warna, $nama;
    public function setProduk($nama, $ukuran, $warna) {
        $this->nama = $nama;
        $this->ukuran = $ukuran;
        $this->warna = $warna;
    }
    public function getInfoProduk() {
        return "$this->nama (Ukuran: $this->ukuran, Warna: $this->warna)";
    }
}

// Kelas turunan
class Topi extends ItemProduk {
    public $model;
    public function setTopi($model) {
        $this->model = $model;
    }
    public function getInfoTopi() {
        return "Topi model $this->model, " . $this->getInfoProduk();
    }
}

class Celana extends ItemProduk {
    public $tipe;
    public function setCelana($tipe, $model) {
        $this->tipe = $tipe;
        $this->model = $model;
    }
    public function getInfoCelana() {
        return "Celana tipe $this->tipe, " . $this->getInfoProduk();
    }
}

class Baju extends ItemProduk {
    public $tipe;
    public function setBaju($tipe) {
        $this->tipe = $tipe;
    }
    public function getInfoBaju() {
        return "Baju tipe $this->tipe, " . $this->getInfoProduk();
    }
}

// Eksekusi
$topi = new Topi();
$topi->setProduk("Fedora", "M", "Hitam");
$topi->setTopi("Formal");
echo $topi->getInfoTopi() . "\n";

$celana = new Celana();
$celana->setProduk("Jeans", "32", "Biru");
$celana->setCelana("Panjang", "Skinny");
echo $celana->getInfoCelana() . "\n";

$baju = new Baju();
$baju->setProduk("Kaos", "L", "Putih");
$baju->setBaju("Casual");
echo $baju->getInfoBaju() . "\n";
?>
