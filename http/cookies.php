

<?php

$name = "Somename";
$value = 15;
$expiration = time() + (60*60*24*7);// seconds * minutes * hours * days THIS COMES OUT TO A WEEK

setcookie($name, $value, $expiration);//prebuilt function in php that takes 3 params

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

if(isset($_COOKIE["Somename"])) {
    $user = $_COOKIE["Somename"];

    echo $user;
} else {
    $user = "";
}

?>
    
</body>
</html>