<?php


class Dog {
    var $color = "brown";
    var $type = "lab";
    var $age = "5";

    function showAll() {
        echo $this->color . "<br>";
        echo $this->type . "<br>";
        echo $this->age . "<br>";
    }
}

$puppy = new Dog();
$puppy->showAll();


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