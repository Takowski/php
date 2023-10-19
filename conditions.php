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

echo"<p>3. Display a different greeting according to the user's age.</p>";

echo 
'<form method="get" action="">
    <label for="age">Enter your age:</label>
    <input type="number" name="age" id="age">
    <input type="submit" name="submit" value="Greet me now">
</form>
';

if (isset($_GET['age'])) {
    $age = $_GET['age'];
    if ($age < 12) {
        $message = "Hello kiddo!";
    } elseif ($age >= 12 && $age <= 18) {
        $message = "Hello Teenager!";
    } elseif ($age > 18 && $age <= 115) {
        $message = "Hello Adult!";
    } else {
        $message = "Wow! Still alive? Are you a robot, like me? Can I hug you?";
    }
    echo $message;
}

echo"<p>4. Display a different greeting according to the user's age and gender.</p>";

?>  
</body>
</html>
