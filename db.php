<?php

$connection = mysqli_connect('localhost', 'root', '', 'loginapp');

    if(!$connection) {
        die("database is not connected");
    }
?>