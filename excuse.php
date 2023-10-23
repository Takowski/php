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
 <label for="child name">Child name:</label>
    <input type="text" name="child name" id="child name"><br>
    <input type="radio" name="gender" value="male" id="boy"><label for="Boy">Boy</label>
    <input type="radio" name="gender" value="female id="girl"><label for="Girl">Girl</label><br>
    <label for="teacher name">Teacher name:</label>
    <input type="text" name="teacher name" id="teacher name"><br>
    <label for="reason">Reason for the abscence:</label>
    <input type="radio" name="reason" value="illness" id="illness"><label for="illness">Illness</label>
    <input type="radio" name="reason" value="death" id="death"><label for="death">Death in the family</label>
    <input type="radio" name="reason" value="extra" id="extra"><label for="extra">Extra-curricular activity</label><br>
    <input type="submit" name="submit" value="submit">
</form>';


    ?>
</body>

</html>