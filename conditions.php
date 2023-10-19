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
echo"<P>1.1 Clean your room Exercise</P>";

$room_state = "filthy";

if ($room_state == "dirty") {
    echo "Yuk, Room is dirty : let's clean it up !";
    cleanup_room($room_state);
    echo "<br>Room is now clean!";
    $room_state = "clean";
} elseif ($room_state == "biohazard") {
    echo "yuk, room is a biological hazard, call the CDC ! <br>";
    cleanup_room($room_state);
    echo "<br>Room is now clean!";
    $room_state = "clean";
} elseif ($room_state == "filthy") {
    echo "<br>Yuk, room is a pigpen, clean it up !";
    cleanup_room($room_state);
    echo "<br>Room is now clean!";
} else {
    echo "<br>Nothing to do, room is neat.";
}

function cleanup_room($room_state) {
    // Clean up the room here
}
echo "<p>2. Display a different greeting message depending on the time of the day.</p>";
date_default_timezone_set('Europe/Paris');
$now = date('H:i');
echo $now;
if ($now >= "05:00" && $now <= "09:00") {
    echo "<br>Good morning!";
} elseif ($now > "09:00" && $now <= "12:00") {
    echo "<br>Good day!";
} elseif ($now > "12:00" && $now <= "16:00") {
    echo "<br>Good afternoon!";
} elseif ($now > "16:00" && $now <= "21:00") {
    echo "<br>Good evening!";
} else {
    echo "<br>Good night!";
}
?>  
</body>
</html>