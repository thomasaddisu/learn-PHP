<!-- <?php 
  echo "Hello my world, php is alive";
  echo "this is another php code with out semicolon";
   ?>-->

   <!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <p>This will run before the php</p>
    <?php
    $age = 18;
    $name = "Thomas";
    $names = array('thomas', 'addisu', 32, false, 4.6);
    $names2 = [1, false, 'thomas'];
    if($age >= 18){
      echo $name; 
      echo  " you can drink Alchol";
      foreach( $names as $name){
        echo " ";
        echo $name;
        echo " ";
      };
    }else{
      echo "you can't drink Alchol";
    }
    ?>
    <p>This will run after the php</p>
</body>
</html> -->

// object and class in php

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <p>Class and Object in php</p>
  <?php 
  class Car{
    public $name;
    private $color = "Black";
     public function displayColor(){
      echo $this->color;
    }
  }

  $mybugati = new Car();
  $mybugati->displayColor();
  ?>
</body>
</html>