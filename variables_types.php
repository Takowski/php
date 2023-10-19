<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php variable</title>
</head>
<body>
<?php
$Name = "Pedro";
$age = 20;
$eyeColor = "brown";
$family = array("Pedro", "Juan", "Maria", "Jose");
$angry = false;
$angryText = $angry ? "Yes" : "No";
echo 
    "<p>Hi! My name is $Name.</p>
     <p>I am $age years old.</p>
     <p>my eye is {$eyeColor}.</p>
     <p>The first person in my family is {$family[0]}.</p>
     <p>Am I angry? {$angryText}.</p>
    ";
    $temperature = 20;
    if( $temperature > 21 ) {
        // code to execute if the condition results TRUE
        $clothes = "T-shirt";
        $should_i_wear_a_scarf = false;
      } else {
        // code to execute if the condition results FALSE
        $clothes = "Pull-over";
        $should_i_wear_a_scarf = true;
      }
        echo "<p>Today I will wear a {$clothes}.</p>";

?>   
</body>
</html>

