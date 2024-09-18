<?php
class belajar {
public $name;
function set_name($new_name) {
$this->name = $new_name;
}
function get_name() {
    return $this->name;
}
}
?>
<?php
$satu = new belajar();
$satu->name='Class Public';
echo "Belajar ";
echo "<hr>";
echo $satu->get_name();
?>