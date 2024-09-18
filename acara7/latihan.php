<?php
class Person {
    public $name; // properti name dideklarasikan dengan public
    // Konstruktor yang dipanggil saat objek dibuat
    function __construct($persons_name) {
        echo "initialize class ";
        $this->name = $persons_name; // inisialisasi properti name
    }
    // Fungsi untuk mengubah nama
    function set_name($new_name) {
        $this->name = $new_name;
    }
    // Fungsi untuk mengambil nama
    function get_name() {
        return $this->name;
    }
    // Destructor yang dipanggil saat objek dihancurkan
    function __destruct() {
        echo "<p>end class</p>";
    }
}
$person1 = new Person("Shinta");
echo $person1->get_name(); // Menampilkan nama yang telah diinisialisasi
?>
