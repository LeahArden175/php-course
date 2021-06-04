<?php
$connection = mysqli_connect('localhost', 'root', '', 'favorite_colors');

if(!$connection) {
    die("database is not connected");
}

?>