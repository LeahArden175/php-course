

<?php

class Car{  //classes MUST be capitalized!

    public $wheels = 4; //available to whole program
    protected $hood = 1; //available to this class or sub-class
    private $engine = 1; //available to this class only. NOT ANY SUBCLASS
    static $doors = 2; // attached to the class and NOT the instance CANNOT do $bmw->doors; must do Car::$doors


    function move() {
        echo "the car is moving";
    }

    function __construct() {
        echo $this -> wheels = 10;
    }

} 

$bmw = new Car();


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>