<?php 
    require_once __DIR__ . '/database.php';

    $room_id = $_GET['id'];

    $sql = "SELECT *, `floor` FROM `stanze` WHERE `id` = " .$room_id .";";
    $result = $conn->query($sql);

    $room = [];
    if ($result && $result->num_rows > 0) {
        
        $room = $result->fetch_assoc();
                   
    } 

    //var_dump($room);
    
    
    $conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info Stanze</title>
</head>
<body>
    <?php if(!empty($room)) { ?>
        <a href="index.php">torna alla lista delle stanze</a>
        <h2>Info Stanza numero: <?php echo$room['room_number']?></h2>

        <ul>
            <li>La stanza si trova al piano numero: <?php echo $room['floor']?> </li>
            <li>Numero letti: <?php echo $room['beds']?></li>
        </ul>

    <?php } else {?>

        <p>Stanza non trovata!</p>

    <?php }?>

</body>
</html>