<?php


    $connection = mysqli_connect('localhost', 'root', '', 'loginapp');

    if($connection) {
        echo 'we are connected';
    } else {
        die("database is not connected");
    }

    $query = "SELECT * FROM users";

    $result = mysqli_query($connection, $query);

    if(!$result) {
        die('query failed');
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    
</head>
<body>
    <div class="container">
        <div class="col-xs-6">

        <?php
        
        while($row = mysqli_fetch_assoc($result)){
            ?>
            <pre>
            <?php

            print_r($row);
            ?>
            </pre>
            <?php
        }
        
        ?>
        </div>
    
    </div>
</body>
</html>