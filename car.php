<!-- display car information -->
<?php
class Car{
  public $name;
  private $color = "Black";
   public function displayColor(){
    echo $this->color;
   }}
   $myBugatti = new Car();
   $myBugatti->displayColor();  
   ?>