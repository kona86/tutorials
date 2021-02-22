<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Statement</title>
</head>

<body>
    <form action="switch.php" method="post">
        <input type="text" name="grade" id="">
        <input type="submit" value="Submit">
    </form>
    <?php
    $grade = $_POST["grade"];
    switch ($grade) {
        case 'A':
            echo "Amazing- You got an A";
            break;
        case 'B':
            echo "Good Work ,keep praticing";
            break;
        case "C":
        case "D":
            echo "Keep praticing";
            break;
        default:
            echo "You did not enter  a grade!";
            break;
    }
    ?>
</body>

</html>: