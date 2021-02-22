<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For Loops</title>
</head>

<body>
    <?php
    for ($i = 1; $i <= 10; $i += 1) {
        echo "$i <br>";
    }
   
    $luckyNumbers = array(4, 8, 14, 16, 23, 42);
    for ($i = 0; $i < count($luckyNumbers); $i++) {
        echo " the lucky numbers is: $luckyNumbers[$i] <br>";
    }
    ?>
</body>

</html>