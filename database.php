<?php
    
    $servername = "localhost";
    $port = "8889";
    $username = "root";
    $password = "root";
    $dbname = "dbhotel";

    // Connect
    $conn = new mysqli($servername, $port, $username, $password, $dbname);

    // Check connection
    if ($conn && $conn->connect_error) {

        echo "Connection failed: " . $conn->connect_error;
        die();
    } 
        
    
?>    