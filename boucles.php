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
            <?php
            $countries = array('Belgium', 'France', 'Italy', 'Spain', 'Germany', 'Netherlands', 'Switzerland', 'Luxembourg');
            foreach ($countries as $country) {
                echo '<option value="' . $country . '">' . $country . '</option>';
            }
            ?>
        </select>
        <input type="submit" value="Submit">
    </form>

</body>

</html>