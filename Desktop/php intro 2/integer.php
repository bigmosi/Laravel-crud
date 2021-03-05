<?php
class Fruit {
  public $name;
  public $color;

  function set_name($name){
      $this->name =$name;
  }
  function set_color($color){
      $this->color = $color;
  }
  function get_name(){
      return $this->name;
  }
  function get_color(){
      return $this->color;
  }

}
$apple = new Fruit();
$banana = new Fruit();
$apple->set_name("Apple\n");
$banana->set_name("Banana\n");

echo $apple->get_name();
echo $banana->get_name();
?>