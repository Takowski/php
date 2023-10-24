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

    ?>
</body>

</html>