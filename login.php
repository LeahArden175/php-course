<?php

if(isset($_POST['submit'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $connection = mysqli_connect('localhost', 'root', '', 'loginapp');

    if($connection) {
        echo 'we are connected';
    } else {
        die("database is not connected");
    }

    $query = "INSERT INTO users(username, password) VALUES ('$username','$password')";

    $result = mysqli_query($connection, $query);

    if(!$result) {
        die('query failed');
    }
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
            <form action="login.php" method="post">
                <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control">
                </div>

                <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control">
                </div>
                <button class="btn btn-primary" type="submit" name="submit">Submit</button>
            </form>
        </div>
    
    </div>
</body>
</html>