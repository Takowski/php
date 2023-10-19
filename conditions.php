<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>conditions</title>
</head>
<body>
<?php

/**
 * Series of exercises on PHP conditional structures.
*/  

// 1.1 Clean your room Exercise 

$room_is_filthy = false;

if ($room_is_filthy == true) {
    echo "Yuk, Room is dirty : let's clean it up !";
    cleanup_room($room_is_filthy);
    echo "<br>Room is now clean!";
    $room_is_filthy = false;
} else {
    echo "<br>Nothing to do, room is neat.";
}

function cleanup_room($room_is_filthy) {
    // Clean up the room here
}

?>  
</body>
</html>