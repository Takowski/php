<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ternary</title>
</head>

<body>
    <?php
    echo "<p>10.2. Ternary exercice - unicorn variant</p>";
    echo '<form method="get" action="">
    <input type="radio" name="gender" value="H" id="human"><label for="human">Human</label>
    <input type="radio" name="gender" value="C" id="cat"><label for="cat">Cat</label><br>
    <input type="radio" name="gender" value="U" id="unicorn"><label for="unicorn">Unicorn</label><br>
    <input type="submit" name="submit" value="Greeting"> 
</form>';
    $hello = (isset($_GET['gender']) && $_GET['gender'] === "M") ? "Hello sir!" : ((isset($_GET['gender']) && $_GET['gender'] === "C") ? "Hello Cat!" : "Hello unicorn!");
    echo $hello;


    ?>
</body>

</html>