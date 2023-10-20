<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditions2</title>
</head>

<body>
    <?php
    echo "<p>6. The Girl Soccer team</p>";
    echo '<form method="get" action="">
    <label for="age">Enter your age:</label>
    <input type="number" id="age" name="age"><br>
    <label for="gender">Choose your gender:</label>
    <input type="radio" name="gender" value="male" id="male"><label for="male">Male</label>
    <input type="radio" name="gender" value="female" id="female"><label for="female">Female</label><br>
    <input type="submit" name="submit" value="Process">
</form>';

    if (isset($_GET['age']) && isset($_GET['gender'])) {
        $age = $_GET['age'];
        $gender = $_GET['gender'];

        if ($age > 12 && $gender === "female") {
            echo "Welcome to the team!";
        } else {
            echo "Sorry, you don't fit the criteria.";
        }
    }
    echo "<p>7. Achieve the same, without the ELSE.</p>";
    echo '<form method="get" action="">
    <label for="age">Enter your age:</label>
    <input type="number" id="age" name="age"><br>
    <label for="gender">Choose your gender:</label>
    <input type="radio" name="gender" value="male" id="male"><label for="male">Male</label>
    <input type="radio" name="gender" value="female" id="female"><label for="female">Female</label><br>
    <input type="submit" name="submit" value="Process">
</form>';

    $message = "Sorry, you don't fit the criteria.";

    if (isset($_GET['age']) && isset($_GET['gender']) && $_GET['age'] > 12 && $_GET['gender'] === "female") {
        $message = "Welcome to the team!";
    }

    echo $message;

    echo "<p>8. School sucks!</p>";
    echo '<form method="get" action="">
    <label for="grade">Enter your grade:</label>
    <input type="number" id="grade" name="grade"><br>
    <input type="submit" name="submit" value="Process">
</form>';

    if (isset($_GET['grade'])) {
        $grade = $_GET['grade'];
        $message = "";

        if ($grade < 4) {
            $message = "This work is really bad. What a dumb kid!";
        } elseif ($grade >= 5 && $grade <= 9) {
            $message = "This is not sufficient. More studying is required.";
        } elseif ($grade === 10) {
            $message = "Barely enough!";
        } elseif ($grade >= 11 && $grade <= 14) {
            $message = "Not bad!";
        } elseif ($grade >= 15 && $grade <= 18) {
            $message = "Bravo, bravissimo!";
        } elseif ($grade === 19 || $grade === 20) {
            $message = "Too good to be true : confront the cheater!";
        }

        echo $message;
    }
    echo "<p>9. The switch structure</p>";



    ?>
</body>

</html>