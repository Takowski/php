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
    "hobbies" => array("cuisine", "nothing more", "Nothing else"),
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

array_push($me["hobbies"], "taxidermy");

echo'<pre>';
print_r($me);
echo'</pre>';

$me["lastname"] = "Durand";

echo'<pre>';
print_r($me);
echo'</pre>';

$me["hobbies"][4] = "astronomy";

echo'<pre>';
print_r($me);
echo'</pre>';

$soulamate = array (
    "firstname" => "Wendy",
    "lastname" => "Bottemane",
    "age" => 24,
    "country" => "Belgium",
    "city" => "Mons",
    "favorite movies" => array("Vaina", "Raiponce","Aladin"),
    "hobbies" => array("couture", "cuisine", "yolo"),
    "mother"=>$mother ,
);

$possible_hobbies_via_intersection = array_intersect($me["hobbies"], $soulamate["hobbies"]);
echo'<pre>';
print_r($possible_hobbies_via_intersection);
echo'</pre>';
$possible_hobbies_via_merge = array_merge($me["hobbies"], $soulamate["hobbies"]);
echo'<pre>';
print_r($possible_hobbies_via_merge);
echo'</pre>';

$web_development = array(
    "frontend" => array(),
    "backend" => array()
);
array_push($web_development["frontend"], "xhtml");
array_push($web_development["backend"], "Ruby on Rails");
array_push($web_development["frontend"], "CSS");
array_push($web_development["backend"], "Flash");
array_push($web_development["frontend"], "JavaScript");
array_push($web_development["backend"], "JavaScript");

$web_development["frontend"][0] = "html";
unset($web_development["backend"][1]);

echo'<pre>';
print_r($web_development);
echo'</pre>';







?>   
</body>
</html>