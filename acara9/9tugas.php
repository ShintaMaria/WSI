<?php
//Public
class Event {
public $namaevent;
function set_namaevent($new_name) {
$this-> namaevent = $new_name;
}
 function get_namaevent() {
return $this-> namaevent;
}
}
?>
<?php
$event1 = new Event();
$event1->namaevent = 'Bazar Kemerdekaan';  
echo $event1->get_namaevent();
echo "<hr>";
?>


<?php
//Protected
class Kuliner {
    protected $kuliner;
    function set_namakuliner($new_name) {
    $this->kuliner = $new_name;
    }
     function get_namakuliner() {
    return $this->kuliner;
    }
    }
    ?>
    <?php
    $kuliner1 = new Kuliner();
    $kuliner1->set_namakuliner('Nasi Becek'); 
    echo $kuliner1->get_namakuliner();  
    
    echo "<hr>";
    ?>

<?php
//Private
class Wisata {
    private $namawisata;
    function set_namawis($new_name) {
    $this->namawisata = $new_name;
    }
     function get_namawis() {
    return $this->namawisata;
    }
    }
    ?>
    <?php
    $wisata1 = new Wisata();
    $wisata1->set_namawis("Air Terjun Sedudo"); 
    echo $wisata1->get_namawis(); 
    
    echo "<hr>";
?>