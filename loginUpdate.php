<?php 
    include "db.php";
    include "functions.php";

    if(isset($_POST['submit'])){
        updateData();
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
        <form action="loginUpdate.php" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="text" name="password" class="form-control">
            </div>

            <div class="form-group">
                <select name="id" id="">

                <?php
                    getAllData();
                ?>
                <!-- <option value="">1</option>
                <option value="">2</option> -->
                </select>
            </div>
            <input class="btn btn-primary" type="submit" name="submit" value="Update">
        </form>
        </div>
    
    </div>
</body>
</html>