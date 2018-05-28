<?php
// show ERROR instead of CRASHING
ini_set('display_errors', 1);


// Create connection
$conn = mysqli_connect("localhost", "root", "123456", "member");


// Check connection
if (!$conn) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    // echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;

?>