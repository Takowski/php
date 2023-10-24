<!-- break the arrays into word  -->
<!-- for each word str_shuffles but not the first and last letter  -->
<!-- display the word  -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>functions</title>
</head>

<body>
    <?php
    echo "<p>8. Word shuffle</p>";
    $text = "According to a researcher (sic) at Cambridge University,
     it doesn't matter in what order the letters in a word are, 
     the only important thing is that the first and last letter be at the right place. The rest can be a
      total mess and you can still read it without problem. This is because the human mind does not read 
      every letter by itself but the word as a whole.";
    $words = explode(" ", $text);
    echo "<pre>";
    foreach ($words as $word) {
        $shuffled_word = shuffle_word($word);
        echo $shuffled_word . " ";
    }
    echo "</pre>";

    function shuffle_word($word)
    {
        if (empty($word)) {
            return $word;
        }
        $word_length = strlen($word);
        if ($word_length <= 2) {
            return $word;
        }
        $first_letter = $word[0];
        $last_letter = $word[$word_length - 1];
        $middle_letters = substr($word, 1, $word_length - 2);
        $middle_letters = str_shuffle($middle_letters);
        $word = $first_letter . $middle_letters . $last_letter;
        return $word;
    }
    echo "<p>8.Exercises-capitalize</p>";
    $name = "STEPHANE";

    function capitalize($name)
    {
        $name = ucfirst(strtolower($name));
        return $name;
    }
    echo capitalize($name);
    echo "<br>";
    echo "<p>8.Exercises-date</p>";
    function datehms()
    {
        $date = date("d-m-y-H-i-s");
        return $date;
    }
    echo datehms();
    echo "<br>";

    echo "<p>8.Exercises-sum</p>";

    $number1 = 10;
    $number2 = 20;
    function sum($number1, $number2)
    {
        if (!is_numeric($number1) || !is_numeric($number2)) {
            return "Error: argument is the not a number.";
        }
        $sum = $number1 + $number2;
        return $sum;
    }
    echo sum($number1, $number2);
    echo "<br>";
    echo "<p>8.Exercises-acronyme</p>";
    $phrase = "In code we trust!";
    function acronym($phrase)
    {
        $words = explode(" ", $phrase);
        $acronym = "";
        foreach ($words as $word) {
            $acronym .= strtoupper($word[0]);
        }
        return $acronym;
    }
    echo acronym($phrase);
    echo "<br>";
    echo "<p>8.Exercises-Replace</p>";
    $phraseae = array("caecotrophie", "chaenichthys", "microsphaera", "sphaerotheca");
    
    function replace($phraseae)
    {
        $phraseaen = array();
        foreach ($phraseae as $phrase) {
            $phraseaen[] = str_replace("ae", "æ", $phrase);
        }
        return $phraseaen;
    }

    $phraseaen = replace($phraseae);
    echo implode("<br>", $phraseaen);

    echo "<p>8.Exercises-Feedback</p>";

    function feedback(string $message, string $class = "info"): string
{
    return "<div class=\"$class\">" . ucfirst($class) . ": $message.</div>";
}
echo feedback("Incorrect email address", "error");
echo feedback("Incorrect email address");
echo feedback("Incorrect email address", "warning");
echo feedback("Incorrect email address", "success");
echo feedback("Incorrect email address", "info");
echo "</br>";
echo "<p>8.Exercises-Random word generator</p>";

function generateRandomWord(int $minLength, int $maxLength): string
{
    $alphabet = "abcdefghijklmnopqrstuvwxyz";
    $length = rand($minLength, $maxLength);
    $word = "";
    for ($i = 0; $i < $length; $i++) {
        $index = rand(0, strlen($alphabet) - 1);
        $word .= $alphabet[$index];
    }
    return $word;
}

$shortWord = generateRandomWord(1, 5);
$longWord = generateRandomWord(7, 15);

echo "<p>$shortWord</p>";
echo "<p>$longWord</p>";

?>
<button onclick="location.reload()">Generate</button>
<?php
echo "<p>8.Exercises-de-capitalize</p>";
$string = "STOP YELLING I CAN'T HEAR MYSELF THINKING!!";

function decapitalize($string)
{
    $string = strtolower($string);
    $string = ucfirst($string);
    return $string;
}
echo decapitalize($string);
echo "<br>";
echo "<p>8.Exercises calculate_cone_volume</p>";

function calculate_cone_volume($ray, $height)
{
    $volume = $ray * $ray * pi() * $height * (1 / 3);
    return $volume;
}
echo calculate_cone_volume(5, 2);
echo "<br>";

?>
</body>

</html>