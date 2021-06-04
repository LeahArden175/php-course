<?php
include "db.php";

function submitData() {
    if(isset($_POST['submit'])) {
        global $connection;
        $username = $_POST['username'];
        $color = $_POST['color'];

        $query = "INSERT INTO users(username, color) VALUES ('$username', '$color')";
        $result = mysqli_query($connection, $query);

        if(!$result) {
            die("query failed");
        } else {
            echo "data has been submitted";
        }
    }
}

?>