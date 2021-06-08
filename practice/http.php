<?php

session_start();

$_SESSION['greeting'] = "Welcome";

echo $_SESSION['greeting'];

print_r($_GET);

$name = "Username";
$value = "dodo123";
$exipration = time() + (60*60*24*7);

setcookie($name, $value, $exipration);

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
 $id = "hello";

 if(isset($_COOKIE['Username'])) {
     $user = $_COOKIE["Username"];

     echo "<br>" . "the user is " . $user;
 } else {
     $user = 'nothing';
 }

?>

<a href="http.php?id=<?php echo $id;?>">Click Here</a>
    
</body>
</html>