<?php
include "db.php";
include "functions.php";
include "includes/header.php";

createUser();


?>

    <div class="container">
        <div class="col-xs-6">
        <h1 class="text-center">Create</h1>
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
    
<?php
include "includes/footer.php"
?>