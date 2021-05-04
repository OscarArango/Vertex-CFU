<?php
    $servername = "localhost";
    $username = "YOUR_USR";
    $password = "PASSWORD";
    $dbname = "DB_NAME";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
?>