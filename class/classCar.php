<?php

class Car{  //classes MUST be capitalized!

    var $wheels = 4;
    var $hood = 1;
    var $engine = 1;
    var $doors = 2;


    function move() {
        echo "the car is moving";
    }

} 

// if(class_exists("car")) {
 
//     echo "the class exists" . "<br>";
// }

// if(method_exists("Car", "move")) {
//     echo "the method exists";
// }

$bmw = new Car();
$bmw->move();
echo "<br>";

echo "<br>";
echo $bmw->wheels;

?>