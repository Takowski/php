<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>excuses</title>
</head>

<body>
    <?php
    echo "<p>10.3. Excuse generator</p>";
    echo '<form method="get" action="">
 <label for="child_name">Child name:</label>
    <input type="text" name="child_name" id="child_name"><br>
    <input type="radio" name="gender" value="boy" id="boy"><label for="boy">Boy</label>
    <input type="radio" name="gender" value="girl" id="girl"><label for="girl">Girl</label><br>
    <label for="teacher_name">Teacher name:</label>
    <input type="text" name="teacher_name" id="teacher_name"><br>
    <label for="reason">Reason for the absence:</label>
    <input type="radio" name="reason" value="illness" id="illness"><label for="illness">Illness</label>
    <input type="radio" name="reason" value="death" id="death"><label for="death">Death in the family</label>
    <input type="radio" name="reason" value="extra" id="extra"><label for="extra">Extra-curricular activity</label>
    <input type="radio" name="reason" value="other" id="other"><label for="other">Extra-curricular activity</label><br>
    <input type="submit" name="submit" value="submit">
</form>';

    if (isset($_GET["submit"])) {
        $childName = $_GET["child_name"];
        $gender = $_GET['gender'];
        $teacherName = $_GET["teacher_name"];
        $reason = $_GET["reason"];

        $illnessExcuses = array(
            "$childName has a fever and needs to rest.",
            "$childName has a bad cough and needs to stay home.",
            "$childName has a stomach ache and can't come to school today.",
            "$childName has a headache and needs to rest in bed."
        );

        $deathExcuses = array(
            "I'm sorry, but $childName won't be able to attend school today due to a family emergency.",
            "$childName's family is mourning the loss of a loved one and they won't be able to come to school today.",
            "$childName's family is attending a funeral today and they won't be able to come to school.",
            "$childName's family is dealing with a personal tragedy and they won't be able to attend school today."
        );

        $extraExcuses = array(
            "$childName has an important sports game today and can't miss it.",
            "$childName has a music recital today and needs to practice.",
            "$childName has a science fair today and needs to prepare.",
            "$childName has a debate competition today and needs to prepare."
        );

        $otherExcuses = array(
            "$childName has a dentist appointment today and can't come to school.",
            "$childName has a doctor's appointment today and can't come to school.",
            "$childName has a family event today and can't come to school.",
            "$childName is feeling overwhelmed and needs a mental health day."
        );

        $excuse = "";

        switch ($reason) {
            case "illness":
                $excuse = $illnessExcuses[array_rand($illnessExcuses)];
                break;
            case "death":
                $excuse = $deathExcuses[array_rand($deathExcuses)];
                break;
            case "extra":
                $excuse = $extraExcuses[array_rand($extraExcuses)];
                break;
            case "other":
                $excuse = $otherExcuses[array_rand($otherExcuses)];
                break;
            default:
                $excuse = "We're sorry, but $childName won't be able to attend school today.";
                break;
        }

        $excuse .= " Please excuse $teacherName's class for my $gender abscence.";

        echo "<p>" . $excuse . "</p>";
    }







    ?>
</body>

</html>