<?php
    require_once __DIR__ . '/database.php';

    $sql = "SELECT *, `floor` FROM `stanze`;";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            var_dump($row);
        //echo "Stanza N. ". $row['room_number']. " piano: ".$row['floor'];
        }        
    } 
       
?>
