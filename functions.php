<?php

include "db.php";

function createUser() {
    if(isset($_POST['submit'])) {
        global $connection;
        $username = $_POST['username'];
        $password = $_POST['password'];
    
        $query = "INSERT INTO users(username, password) VALUES ('$username','$password')";
    
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