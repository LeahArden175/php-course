

<?php

class Car{  //classes MUST be capitalized!

    var $wheels = 4;
    var $hood = 1;
    var $engine = 1;
    var $doors = 2;


    function move() {
        echo "the car is moving";
    }

    function __construct() {
        echo $this -> wheels = 10;
    }

} 

// class Plane extends Car {


// }

// $jet = new Plane();

// echo $jet->wheels;

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