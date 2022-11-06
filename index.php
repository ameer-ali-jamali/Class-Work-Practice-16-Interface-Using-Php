<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <?php

  // Interface
  // Interfaces permit users to programmatically define the public methods that a class should implement without bothering about the implementation complexities and details of any particular method. Interfaces make it easy to use different classes in the same way. When one or more classes use the same interface, it is referred to as "polymorphism" in PHP.

  // Interfaces are declared with interface keyword. 

  // Example:



  interface InterfaceName
  {
    public function Method1();
    public function Method2($name, $surname);
    public function Method3(): string;
  }


  //    Implementing Interface
  //  To implement an interface on a class, we need to use implements keyword. 

  // Example:

  interface Human
  {
    public function makeSound();
  }

  class Programmer implements Human
  {
    public function makeSound()
    {
      echo "Hello World";
    }
  }

  $human = new Programmer();
  $human->makeSound();

  ?>
</body>

</html>