<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>boucles</title>
</head>

<body>
    <?php
    $names = array('John', 'jeanne', 'Joan', 'émile');
    foreach ($names as $name) {
        echo ucfirst($name);
    }
    var_dump($names);

    $pronouns = array('I', 'You', 'He/She', 'We', 'You', 'They');
    foreach ($pronouns as $pronoun) {
        echo $pronoun;
        if ($pronoun == 'He/She') {
            echo ' codes';
        } elseif ($pronoun == 'I') {
            echo ' code';
        } else {
            echo ' code';
        }
        echo '<br>';
    }
    $number = 1;
    while ($number <= 120) {
        echo $number . '<br>';
        $number++;
    }
    for ($number = 1; $number <= 120; $number++) {
        echo $number . '<br>';
    }
    ?>
    <form>
        <label for="country">Select a country:</label>
        <select id="country" name="country">
            <option value="">Choose a country</option>
            <?php
$countries = array(
    "Belgium" => "Be",
    "France" => "Fr",
    "Germany" => "De",
    "Netherlands" => "Nl",
    "Ukraine" => "Ua",
    "Spain" => "Es",
    "Italy" => "It",
    "Portugal" => "Pt",
    "United Kingdom" => "Uk",
    "United States" => "Us"
);

foreach ($countries as $country_name => $iso_code) {
    echo '<option value="' . $iso_code . '">' . $country_name . '</option>';
}
            ?>
        </select>
        <input type="submit" value="Submit">
    </form>

</body>

</html>