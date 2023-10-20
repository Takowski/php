<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ternary</title>
</head>
<body>
<?php
echo "<p>11. Ternary exercice - unicorn variant</p>";
echo '<form method="get" action="">
<input type="radio" name="gender" value="M" id="male"><label for="male">Male</label>
    <input type="radio" name="gender" value="F" id="female"><label for="female">Female</label><br>
    <input type="submit" name="submit" value="Greeting"> 
</form>';

$hello = (isset($_GET['gender']) && $_GET['gender'] === "M") ? "Hello sir!" : "Hello madam!";
echo $hello;


?>
</body>
</html>