<?php
class person {
private $name;
function set_name($new_name) {
$this->name = $new_name;
}
function get_name() {
return $this->name;
}
}
?>
<?php
$person1 = new Person();
$person1->set_name("Class Private");
echo "Belajar ";
echo "<hr>";
echo $person1->get_name();
?>