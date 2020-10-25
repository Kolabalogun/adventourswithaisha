<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aisha_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// // Check connection
if (!$conn) {
    echo "error connecting to db" . mysqli_error($conn);
}


?>