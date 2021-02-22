<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Story</title>
</head>

<body>
    <form action="story.php" method="get">
        Color:<input type="text" name=color></br>
        Celebrity: <input type="text" name="noun"></br>
        <input type="submit">
    </form>
    <?php
    $color = $_GET["color"];
    $noun = $_GET["noun"];

    echo "Roses are $color <br>";
    echo "Violet are $noun <br>";

    ?>
</body>

</html>