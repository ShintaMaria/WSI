<?php
class person {
protected $name;
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
$person1->set_name('Belajar');
echo $person1->get_name();
echo "Class Protected ";
echo "<hr>";
?>