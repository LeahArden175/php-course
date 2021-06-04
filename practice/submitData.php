<?php
include "db.php";
include "functions.php";
submitData();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="submitData.php" method="post">
        <div>
            <label for="username">Username</label>
            <input type="text" name="username">
        </div>
        <div>
            <label for="color">Color</label>
            <input type="text" name="color">
        </div>
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>