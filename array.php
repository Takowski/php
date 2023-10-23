<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array</title>
</head>
<body>
 <?php
    $mother= array (
        "firstname" => "Martine",
        "lastname" => "Delforge",
        "age" => 65,
        "country" => "Belgium",
        "city" => "Mons",
        "favorite movies" => array("The Lord of the Rings", "The Hobbit", "Star Wars", "The Matrix"),
        "hobbies" => array("nothing", "nothing more", "Nothing else"),
    );
$me= array (
    "firstname" => "Stephane",
    "lastname" => "Delforge",
    "age" => 41,
    "country" => "Belgium",
    "city" => "Mons",
    "favorite movies" => array("The Lord of the Rings", "The Hobbit", "Star Wars", "The Matrix"),
    "hobbies" => array("nothing", "nothing more", "Nothing else"),
    "mother"=>$mother ,
);


 echo'<pre>';
 print_r($me);
 echo'</pre>';

$countme = count($me["hobbies"]);
echo "i have " . $countme . " hobbies.</br>";
$countmother = count($mother["hobbies"]);
echo "my mother has " . $countmother . " hobbies.</br>";
$total = $countme + $countmother;
echo "we have " . $total . " hobbies together.";





?>   
</body>
</html>