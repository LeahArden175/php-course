<?php 
    include "db.php";
    include "functions.php";

    if(isset($_POST['submit'])){
        updateData();
    }
?>



<?php
include "includes/header.php";
?>
    <div class="container">
        <div class="col-xs-6">
        <h1 class="text-center">Update</h1>
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
    
<?php
include "includes/footer.php";
?>