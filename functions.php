<?php

include "db.php";

function createUser() {
    if(isset($_POST['submit'])) {
        global $connection;
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sanitizedUsername = mysqli_real_escape_string($connection, $username);
        $sanitizedPassword = mysqli_real_escape_string($connection, $password);

        $hashFormat = "$2y$10$";
        $salt = "iusesomecrazystrings22";
        $hashF_and_salt = $hashFormat . $salt;

        $encryptedPassword = crypt($sanitizedPassword, $hashF_and_salt);
    
        $query = "INSERT INTO users(username, password) VALUES ('$sanitizedUsername','$encryptedPassword')";
    
        $result = mysqli_query($connection, $query);
    
        if(!$result) {
            die('query failed');
        } else {
            echo "user has been created";
        }
    }
}

function getAllData() {

    global $connection;    
    $query = "SELECT * FROM users";

    $result = mysqli_query($connection, $query);

    if(!$result) {
        die('query failed');
    }

    while($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        echo "<option value='$id'>$id</option>";
    }
}


function updateData() {

    global $connection; 
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];

    $query = "UPDATE users SET username = '$username', password = '$password' WHERE id = $id";

    $result = mysqli_query($connection, $query);

    if(!$result) {
        die('query failed' .  mysqli_error($connection));
    } else {
        echo 'user has been updated';
    }
}

function deleteData() {
    if(isset($_POST['submit'])){
        global $connection; 
        // $username = $_POST['username'];
        // $password = $_POST['password'];
        $id = $_POST['id'];

        $query = "DELETE FROM users WHERE id = $id";

        $result = mysqli_query($connection, $query);

        if(!$result) {
            die('query failed' .  mysqli_error($connection));
        } else {
            echo 'user has been deleted';
        }
    }   
}
?>